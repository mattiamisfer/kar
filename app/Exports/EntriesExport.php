<?php

namespace App\Exports;

use App\Models\Entries;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class EntriesExport implements FromCollection,WithHeadings,WithStyles,WithMappedCells,WithEvents,WithCustomStartCell
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function mapping(): array
    {
        return [
            'id'  => 'A2',
            'client_name' => 'B2',
        ];
    }
    public function headings():array{
        return[
            'BRANCH',
            'DT. OF RECEIPT OF REQUIREMENT',
            'client_name',
            'CLIENT',
            'COUNTRY',

            'PROJECT',
            'POSITIONS',
            'NO. OF REQUIREMENTS',
            'SOURCE',
            'CVS SHARED',
            'SHORTLISTED',
            'LINED UP FOR INTERVIEW',
            'INTERVIEW LOCATION',
            'DATE OF INTERVIEW',
            'ATTENDED',
            'SELECTED',
            'ACCEPTED',
            'OFFER RECEIVED ',
            'UNDER MEDICAL',
            'MEDICAL FIT',
            'VISA UNDER PROCESS',
            'VISA RECEIVED',
            'ECR STATUS',
            'SCHEDULED',
            'DEPLOYED ON',
            'REMARKS',


        ];
    }

    public function registerEvents(): array
    {


        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $style_text_center = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                    ]
                ];
                $name = Auth::user()->name;
                $event->sheet->getDelegate()->freezePane('A2');
                $event->sheet->setCellValue('C1','DAILY UPDATES ON ACCOUNT MANAGEMENT');
               // $event->sheet->setCellValue('G1','Name'.$name);
            $event->sheet->getStyle('A2:A4')->applyFromArray($style_text_center);

            },
        ];
    }
    public function startCell(): string
    {
        return 'A2';
    }
    protected $date;

    public function __construct($date)
    {
       $this->date = $date;
    }
    public function collection()
    {
        //

        return  DB::table('entries')
        ->join('users', 'entries.user_id', '=', 'users.id')
        ->select(
            'users.branch_name',
        'entries.receipt_requirement_date',
        'entries.client_name',
        'entries.country_name',
        'entries.project_name',
        'entries.postitions',
        'entries.num_of_requirement',
        'entries.source',
        'entries.cvs_shared',
        'entries.short_list',
        'entries.line_up_for_interview',
        'entries.interview_location',
        'entries.date_of_interview',
        'entries.attended',
        'entries.selected',
        'entries.offer_received',
        'entries.under_medical',
        'entries.medical_fit',
        'entries.visa_under_proccess',
        'entries.visa_received',
        'entries.ecr_status',
        'entries.scheduled',

        'entries.deployed_on',
        'entries.remarks',
        )->whereDate('entries.created_at','=',$this->date)->get();
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:Z1')->getFill()->applyFromArray(['fillType' => 'solid','rotation' => 0, 'color' => ['rgb' => 'ffe0e0'],]);
        $sheet->getStyle('A2:Z2')->getFill()->applyFromArray(['fillType' => 'solid','rotation' => 0, 'color' => ['rgb' => 'ffe0e0'],]);

    }
}
