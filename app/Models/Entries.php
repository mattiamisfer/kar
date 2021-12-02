<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_requirement_date',
        'client_name',
        'country_name',
        'project_name',
        'postitions',
        'num_of_requirement',
        'source', 'cvs_shared',
        'short_list',
        'line_up_for_interview',
        'interview_location',
        'date_of_interview',
        'attended',
        'selected',
        'accepted',
        'offer_received',
        'under_medical',
        'medical_fit',
        'visa_under_proccess',
        'visa_received',
        'ecr_status',
        'scheduled',
        'deployed_on',
        'remarks',

        'user_id',

    ];

    public function branch() {
        return $this->belongsTo(Branch::class);

    }

}
