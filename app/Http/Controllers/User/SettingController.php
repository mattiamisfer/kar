<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    //

    public function changepassword() {

        return view('user.change_pw');

    }

    public function update_password(Request $request) {

        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
             ]);

        $user = User::find(Auth::user()->id);

        $user->password = Hash::make($request->password);
        if($user->save()) {
            // return 2;

           // redirect('login');


            return redirect()->route('login')->with('success',' Password Changed Successfully ');

         }else {
               return back()->with('failure','Sorry Some Error');
         }



    }
}
