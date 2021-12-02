<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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


        $users = User::where('user_type','=',2)->orderBy('id','DESC')->get();

        return view('admin.users.index',compact('users'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('admin.users.create');

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


    //  $validate =    $request->validate([
    //          'email' => ['required', 'string', 'email', 'max:255', 'unique:users']

    //     ]);

        // $validator = Validator::make($request->all(), [
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        // ]);

         $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => 'required',
            'password' => 'required',
            'branch_name' => 'required'
             ]);
        // if ($validator->fails()) {
        //     return redirect('admin/users/create')
        //              ->withErrors($validator)
        //              ->withInput();
        //   }
        $user =new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->branch_name = $request->branch_name;
        $user->password = Hash::make($request->password);
        $user->user_type = 2;



        $email = $request->email;
        $data =  (
            [
                'name' => $request->username,
                'branch' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ]
            );


        if($user->save()) {

            Mail::to($email)->send(new RegistrationMail($data));
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

        $user = User::find($id);
        return  view('admin.users.edit',compact('user'));
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

        $user = User::find($id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->branch_name = $request->branch_name;
        if($request->password){

        $user->password = Hash::make($request->password);
        }
        $user->user_type = 2;

        if($user->save()) {

            //Mail::to($email)->send(new RegistrationMail($data));
            // return 2;
            return back()->with('success','Successfully Deleted');
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

        $user  = User::find($id);
        if($user->delete()) {
            // return 2;
            return back()->with('success','Successfully Deleted');
         }else {
               return back()->with('failure','Sorry Some Error');
         }
    }
}
