<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Entries;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $entries  = Entries::where('user_id','=',Auth::user()->id)->orderBy('id','ASC')->get();

        return view('user.form.index',compact('entries'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $branches = Branch::orderBy('sort','ASC')->get();

         return view('user.form.add',compact('branches'));
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

        $entry =  new Entries();

        $entry->receipt_requirement_date = $request->receipt_requirement_date;
        $entry->client_name = $request->client_name;
        $entry->country_name = $request->country_name;
        $entry->project_name = $request->project_name;
        $entry->postitions = $request->postitions;
        $entry->num_of_requirement = $request->num_of_requirement;
        $entry->source = $request->source;


        $entry->cvs_shared = $request->cvs_shared;
        $entry->short_list = $request->short_list;
        $entry->line_up_for_interview = $request->line_up_for_interview;
        $entry->interview_location = $request->interview_location;
        $entry->date_of_interview = $request->date_of_interview;
        $entry->attended = $request->attended;
        $entry->selected = $request->selected;
        $entry->accepted = $request->accepted;
        $entry->offer_received = $request->offer_received;
        $entry->under_medical = $request->under_medical;

        $entry->medical_fit = $request->medical_fit;
        $entry->visa_under_proccess = $request->visa_under_proccess;
        $entry->visa_received = $request->visa_received;
        $entry->ecr_status = $request->ecr_status;
        $entry->scheduled = $request->scheduled;
        $entry->deployed_on = $request->deployed_on;
        $entry->remarks = $request->remarks;
        //$entry->branch_id = $request->branch_id;
        $entry->user_id = Auth::user()->id;


        if($entry->save()) {
            // return 2;
            return back()->with('success','Successfully Added');
         }else {
               return back()->with('failure','Sorry Some Error');
         }





        // 'client_name',
        // 'country_name',
        // 'project_name',
        // 'postitions',
        // 'num_of_requirement',
        // 'source', 'cvs_shared',
        // 'short_list',
        // 'line_up_for_interview',
        // 'interview_location',
        // 'date_of_interview',
        // 'attended',
        // 'selected',
        // 'accepted',
        // 'offer_received',
        // 'under_medical',
        // 'medical_fit',
        // 'visa_under_proccess',
        // 'visa_received',
        // 'ecr_status',
        // 'scheduled',
        // 'deployed_on',
        // 'remarks',
        // 'branch_id'
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

        $entry = Entries::find($id);
        $branches = Branch::orderBy('sort','ASC')->get();

        return view('user.form.edit',compact('entry','branches'));
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

        $entry =  Entries::find($id);

        $entry->receipt_requirement_date = $request->receipt_requirement_date;
        $entry->client_name = $request->client_name;
        $entry->country_name = $request->country_name;
        $entry->project_name = $request->project_name;
        $entry->postitions = $request->postitions;
        $entry->num_of_requirement = $request->num_of_requirement;
        $entry->source = $request->source;


        $entry->cvs_shared = $request->cvs_shared;
        $entry->short_list = $request->short_list;
        $entry->line_up_for_interview = $request->line_up_for_interview;
        $entry->interview_location = $request->interview_location;
        $entry->date_of_interview = $request->date_of_interview;
        $entry->attended = $request->attended;
        $entry->selected = $request->selected;
        $entry->accepted = $request->accepted;
        $entry->offer_received = $request->offer_received;
        $entry->under_medical = $request->under_medical;

        $entry->medical_fit = $request->medical_fit;
        $entry->visa_under_proccess = $request->visa_under_proccess;
        $entry->visa_received = $request->visa_received;
        $entry->ecr_status = $request->ecr_status;
        $entry->scheduled = $request->scheduled;
        $entry->deployed_on = $request->deployed_on;
        $entry->remarks = $request->remarks;
      //  $entry->branch_id = $request->branch_id;


        if($entry->save()) {
            // return 2;
            return back()->with('success','Successfully Updated');
         }else {
               return back()->with('failure','Sorry Some Error');
         }

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

        $entries  = Entries::find($id);
        if($entries->delete()) {
            // return 2;
            return back()->with('success','Successfully Deleted');
         }else {
               return back()->with('failure','Sorry Some Error');
         }
    }



}
