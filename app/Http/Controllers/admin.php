<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\User;
use App\Models\button;
use App\Models\component;
use Illuminate\Http\Request;
use App\Models\reading_update;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Mail\ambientTemperatureMail;
use Illuminate\Support\Facades\Mail;

class admin extends Controller
{
    //admin return add user view
    function returnAdminAddUesr(){
        return view('admin.userManagement.addUser');
    }
    //store new user details
    function storeNewUserAdmin(Request $request){

        // dd($request->all());
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = bcrypt('password');
            $user->save();
            return redirect('/adminAddUesr')->with('message','New User has been Added');
    }
    ////////////////////////////////User Management Routes//////////////////////////

    function returnmanageUsersTbl(){
        $data = User::all();
        return view('admin.userManagement.manageUsersTbl')->with('data',$data);
    }

    function removeUserDetailsAdmin($id)
    {
    User::destroy($id);
    return response()->json(['message' => 'User deleted successfully']);
    }

    function editUserDetailsAdmin($id){
       $data =  User::all()->where('id',$id);
       return view('admin.userManagement.editUserDetails')->with('data',$data);
    }

    function storeUpdatedUserDetailsAdmin(Request $request){
        DB::table('users')
            ->where('id', $request->id)
            ->update([
                'name' =>  $request->name,
                'email' =>  $request->email,
                'role' =>  $request->role,
            ]);

        return response()->json(['success' => 'Data Updated']);
    }

    //////////////////////////////Admin checkbox status cahnge routes///////////////////////////

    function changeStatusWMOn(Request $request){
        if($request->name == "water_motor"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['water_motor' => "ON"]);
            return response()->json(['success'=>'1']);

        }elseif($request->name == "nutrition_pump_1"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['nutrition_pump_1' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "nutrition_pump_2"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['nutrition_pump_2' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "fan"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['fan' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "growing_light"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['growing_light' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "normal_light"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['normal_light' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);

        }else{
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['ph_control_motor' => "ON"]);
            return response()->json(['success'=>'Status change successfully.']);
        }
    }
    function changeStatusWMOff(Request $request){
        if($request->name == "water_motor"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['water_motor' => "OFF"]);
            return response()->json(['success'=>'1']);

        }elseif($request->name == "nutrition_pump_1"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['nutrition_pump_1' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "nutrition_pump_2"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['nutrition_pump_2' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "fan"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['fan' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "growing_light"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['growing_light' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);

        }elseif($request->name == "normal_light"){
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['normal_light' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);

        }else{
            DB::table('reading_updates')
            ->where('id', $request->id)
            ->update(['ph_control_motor' => "OFF"]);
            return response()->json(['success'=>'Status change successfully.']);
        }
    }


    public function getWaterCapacity(Request $request)
    {
        $latestWaterCapacity = reading_update::latest()->value('water_capacity');
        return response()->json(['water_capacity' => $latestWaterCapacity]);
    }



    public function getUpdatedValues(Request $request)
{
    $latestWaterCapacity = reading_update::latest()->value('water_capacity');
    $ambient_temperature = reading_update::latest()->value('ambient_temperature');
    $ambient_humidity = reading_update::latest()->value('ambient_humidity');
    $water_temperature = reading_update::latest()->value('water_temperature');
    $ph = reading_update::latest()->value('ph');
    $ec = reading_update::latest()->value('ec');
    $ambient_light = reading_update::latest()->value('ambient_light');

    return response()->json([
        'water_capacity' => $latestWaterCapacity,
        'ambient_temperature' => $ambient_temperature,
        'ambient_humidity' => $ambient_humidity,
        'water_temperature' => $water_temperature,
        'ph' => $ph,
        'ec' => $ec,
        'ambient_light' => $ambient_light,
    ]);
}


///////admin itms functions/////////////


//return add itme view
function addItemsAdmin(){

return view('admin.items.addItem');

}

function storeItemDetais(Request $request){

    // $this->validate($request,[
    //     'name'=>'required',
    //     'description'=>'required',
    //     'price'=>'required',
    //     'image'=>['image', 'mimes:jpg,jpeg,bmp,svg,png','max:50000'],
    // ]);

    if(request()->has('item_image')){
        $data = new Item;
        if(request()->has('item_discount')){
             $data = new Item;
        $itemuploaded = request()->file('item_image');
        $itemname = time(). '.' . $itemuploaded->getClientOriginalExtension();
        $itempath = public_path('webSiteImages/store/');
        $itemuploaded->move( $itempath, $itemname);
        $data->image = 'webSiteImages/store/' . $itemname;
        $data->name = $request->item_name;
        $data->description =$request->item_description;
        $data->price =$request->item_price;
        $data->discount =$request->item_discount;
        $data->save();
        return redirect()->back()->with('message','Item Added Successfully');
        }
    }
}

function  manageItemsAdmin(){
    $data = Item::all();
    return view('admin.items.manageItemTbl')->with('data',$data);
}


function removeItemDetailsAdmin($id)
{
Item::destroy($id);
return response()->json(['message' => 'Item deleted successfully']);
}


function getItemDetails($id){

    $item = Item::find($id);

    // Return the item details as JSON
    return response()->json($item);

}

function updateItemDetails(Request $request, $id){
    $data = Item::find($id);
    $data->name = $request->input('itemName');
    $data->description = $request->input('itemDescription');
    $data->price = $request->input('itemPrice');
    $data->discount = $request->input('itemDiscount');

    if ($request->hasFile('itemImage')) {
        $itemuploaded = request()->file('itemImage');
        $itemname = time(). '.' . $itemuploaded->getClientOriginalExtension();
        $itempath = public_path('webSiteImages/store/');
        $itemuploaded->move( $itempath, $itemname);
        $data->image = 'webSiteImages/store/' . $itemname;
    }
    $data->save();
    return response()->json(['message' => 'Item updated successfully']);
}


//change status of all buttons (ambient temperature)

function updateButtonsToZero(){


    Mail::to("lankanhydoponic@gmail.com")->send(new ambientTemperatureMail());
    DB::table('reading_updates')
    ->where('id', 1)
    ->update([
        'water_motor' =>  "OFF",
        'nutrition_pump_1' =>  "OFF",
        'nutrition_pump_2' =>  "OFF",
        'fan' =>  "OFF",
        'growing_light' =>  "OFF",
        'normal_light' =>  "OFF",
        'ph_control_motor' =>  "OFF",
    ]);
return response()->json(['success' => 'Data Updated']);


}

function updateEmergencyButton(){



    DB::table('reading_updates')
    ->where('id', 1)
    ->update([
        'emergency_button' =>  "1",

    ]);
return response()->json(['message' => 'Data Updated']);


}

}

