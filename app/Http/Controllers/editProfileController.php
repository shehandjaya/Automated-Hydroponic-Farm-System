<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class editProfileController extends Controller
{
    //function for return Edit Profile Admin
    function returnEditProfileAdmin(){
        $data = User::all()->where('id',Auth::user()->id);
        return view('editProfile.adminEditProfile')->with('data',$data);
    }
    //function for return Edit Profile User
    function returnEditProfileUser(){
        return view('editProfile.userEditProfile');
    }
    //update admition profile function
    public function UpdateAdminProfileFunc(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'avatar'=>['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:50000'],
        ]);

        $user = Auth::user();
        if(request()->has('imageInput')){
            $avataruploaded = request()->file('imageInput');
            $avatarname = time(). '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move( $avatarpath, $avatarname);
            $user->avatar = '/images/' . $avatarname;
            $user->save();
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/returnEditProfileAdmin')->with('message','Your Profile is Updated');
    }
    public function UpdateUserProfileFunc(Request $request){
         
         $users = User::where('id', Auth::user()->id)->first();
         if (!$users) {
           abort(404);
         }  
          
         $fname = $request->input('fname') ?: '';
         $lname = $request->input('lname') ?: '';
         $Phone = $request->input('Phone') ?: '';
         $address1 = $request->input('address1') ?: '';
         $address2 = $request->input('address2') ?: '';
         $address3 = $request->input('address3') ?: '';
         $B_date = $request->input('B_date') ?: '';
         $gender = $request->input('gender') ?: '';

        
        User::where('id', Auth::user()->id)->update([
            'fname' => $fname,
            'lname' => $lname,
            'Phone' => $Phone,
            'address1' => $address1,
            'address2' => $address2,
            'address3' => $address3,
            'B_date' => $B_date, 
            'gender' => $gender, 
        ]);  
        
       //return view('editProfile.userEditProfile')>with('reload', true);; 
       return redirect('/returnEditProfileUser');
    }
}
