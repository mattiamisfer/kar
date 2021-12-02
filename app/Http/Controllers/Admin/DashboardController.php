<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EntriesExport;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Company;
use App\Models\Entries;
use App\Models\News;
use App\Models\Sector;
use App\Models\Slider;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $visitors = Visitor::count();
        $companies = Company::count();
        $sectors = Sector::count();
        $news = News::count();
        $sliders = Slider::count();





        return  view('admin.dashboard.dashoard',compact('visitors','companies','sectors','news','sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function get_student_data(Request $request)
    {

   $date =   Carbon::parse($request->current_date)->format('Y-m-d');
        return Excel::download(new EntriesExport($date), $date.'_list.xlsx');
    }


    public function downloads($date)
    {

  // $date =   Carbon::parse($request->current_date)->format('Y-m-d');
        return Excel::download(new EntriesExport($date), $date.'_list.xlsx');
    }
}
