<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Company;
use App\Models\News;
use App\Models\Page;
use App\Models\Sector;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sliders = Slider::orderBy('sort_order','DESC')->get();
         $categories = Category::orderBy('sort_order','ASC')->get();

        return view('web.home',compact('sliders','categories'));
    }


    public function sector($id,$slug) {

         $categories = Category::with('sectors')->where('id','=',$id)->get();

         return view('web.read-sector',compact('categories'));

    }

    public function company() {

        $companies = Company::orderBy('sort_order','ASC')->get();
        return view('web.company',compact('companies'));
    }

    public function news() {

        $news = News::orderBy('sort_order','ASC')->get();
        return view('web.news',compact('news'));
    }

    public function newsinner($id,$slug) {

        $news = News::find($id);
        return view('web.newsinner',compact('news'));

    }

    public function about() {
        $pages = Page::find(1);
        return view('web.about',compact('pages'));
    }
    public function chairman() {
        $pages = Page::find(2);
        return view('web.chairman',compact('pages'));
    }

    public function contact(){
        return view('web.contact');
    }

    public function contactsend(Request $request) {
        $email = $request->email;
        $data =  (
            [
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'message' => $request->message,
            ]
            );

            if(Mail::to($email)->send(new ContactMail($data))) {


                // return 2;
                return back()->with('success','Successfully Send');
             }else {
                   return back()->with('failure','Sorry Some Error');
             }

    }
}
