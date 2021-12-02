<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $sectors = Sector::select('id','logo','content')->orderBy('sort_order','DESC')->get();
        return view('admin.sector.index',compact('sectors'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $categories = Category::orderBy('sort_order','ASC')->get();
        return view('admin.sector.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //['title','icon','logo','slug-url','content','sort_order'];
      //  return $request->all();


        $this->validate($request, [
            'category_id' => 'required',

            "filepath1" => "required",
            "filepath" => "required",
            "content"  => "required",
            "url"  => "required"
            ]);


        $sector = new Sector();
        $sector->category_id = $request->category_id;
        $sector->logo = $request->filepath;
        $sector->gallery = $request->filepath1;
        $sector->content = $request->content;
        $sector->sort_order = $request->sort_order;
        $sector->url = $request->url;

        if($sector->save()) {

            // return 2;
           return back()->with('success','Successfully Created');
        }else {
              return back()->with('failure','Sorry Some Error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\SectorController  $sectorController
     * @return \Illuminate\Http\Response
     */
    public function show(SectorController $sectorController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\SectorController  $sectorController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::orderBy('sort_order','ASC')->get();
         $sector = Sector::find($id);
         return view('admin.sector.edit',compact('sector','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\SectorController  $sectorController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'category_id' => 'required',

            "filepath1" => "required",
            "filepath" => "required",
            "content"  => "required",
            "url"  => "required"
            ]);


        $sector =   Sector::find($id);
        $sector->category_id = $request->category_id;
        $sector->logo = $request->filepath;
        $sector->gallery = $request->filepath1;
        $sector->content = $request->content;
        $sector->sort_order = $request->sort_order;
        $sector->url = $request->url;

        if($sector->save()) {

            // return 2;
           return back()->with('success','Successfully Updated');
        }else {
              return back()->with('failure','Sorry Some Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\SectorController  $sectorController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sector = Sector::find($id);

        if($sector->delete()) {
            // return 2;
            return back()->with('success','Successfully Deleted');
         }else {
               return back()->with('failure','Sorry Some Error');
         }

    }
}
