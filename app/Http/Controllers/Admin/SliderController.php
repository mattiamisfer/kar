<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $sliders = Slider::orderBy('sort_order','DESC')->get();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.slider.create');
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
      //  return $request->all();

        $this->validate($request, [
             'title' => 'required',
            'image' => 'required',
            'page' => 'required'
             ]);

            $slider = new Slider();
            $slider->title = $request->title;
            $slider->page = $request->page;
            $slider->image = $request->image;
            $slider->sort_order = $request->sort_order;

        if($slider->save()) {

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

        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
            'title' => 'required',
           'image' => 'required',
           'page' => 'required'
            ]);

           $slider = Slider::find($id);
           $slider->title = $request->title;
           $slider->page = $request->page;
           $slider->image = $request->image;
           $slider->sort_order = $request->sort_order;

       if($slider->save()) {

            // return 2;
           return back()->with('success','Updated Created');
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

        $user  = Slider::find($id);
        if($user->delete()) {
            // return 2;
            return back()->with('success','Successfully Deleted');
         }else {
               return back()->with('failure','Sorry Some Error');
         }
    }
}
