<?php

namespace App\Http\Controllers;
use App\Models\web_image;
use Illuminate\Http\Request;

class webImages extends Controller
{
     //updateWebImages
    function updateWebImages(){
        $data = web_image::all();
        return view('admin.webImages.index')->with('data',$data);
    }

    public function uploadSiderImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size restrictions as needed
        ]);

        $imageuploaded = request()->file('image');
        $imagename = time(). '.' . $imageuploaded->getClientOriginalExtension();
        $imagepath = public_path('images/webSiteSliderImages/');
        $imageuploaded->move( $imagepath, $imagename);

        $data = new web_image;
        $data->image_name = 'images/webSiteSliderImages/'.$imagename;
        $data->status = 1;
        $data->save();

        return redirect()->back()->with('message','Image Uploaded Successfully');
    }

    function removeWebImageAdmin($id){
        web_image::destroy($id);
        return response()->json(['message' => 'Slider Image deleted successfully']);
    }
}
