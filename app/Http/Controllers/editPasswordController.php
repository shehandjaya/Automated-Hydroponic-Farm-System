<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class editPasswordController extends Controller
{
    //return admin change password view
    function returnEditPasswordAdmin(){
        return view('changePassword.adminChangePassword');
    }

    public function ChangeAdminPasswordFunc(Request $request){
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error','Your current password does not match with what you provied');
        }
        if(strcmp($request->get('current_password'),$request->get('new_password'))== 0){
            return back()->with('error','Your current password cannot be same with new password');
        }
        if(strcmp($request->get('new_password_confirmation'),$request->get('new_password'))== !0){
            return back()->with('error','Pleace check the new passwords');
        }
        $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|string|min:8|confirmed'
        ]);
        $user =Auth::user();
        $user->password=bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('message','Password changed successfully');
        }
}
