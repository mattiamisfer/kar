<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

     $companies = Company::orderBy('sort_order','DESC')->get();
     return view('admin.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.company.create');
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
        //return $request->all();

        $this->validate($request, [
            'image' => 'required',

            "website_url" => "required",

            "content"  => "required"

            ]);

        $company = new Company();

        $company->logo = $request->image;
        $company->sort_order = $request->sort_order;
        $company->content = $request->content;
        $company->url = $request->website_url;
        if($company->save()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
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

        $company = Company::find($id);
        return view('admin.company.edit',compact('company'));
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

        $this->validate($request, [
            'image' => 'required',

            "website_url" => "required",

            "content"  => "required"

            ]);

        $company = Company::find($id);

        $company->logo = $request->image;
        $company->sort_order = $request->sort_order;
        $company->content = $request->content;
        $company->url = $request->website_url;
        if($company->save()) {

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

        $company = Company::find($id);

        if($company->delete()) {
            // return 2;
            return back()->with('success','Successfully Deleted');
         }else {
               return back()->with('failure','Sorry Some Error');
         }
    }
}
