<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CartController;

class CartController extends Controller
{
    public function index()
    {
         
          return view('webSite.cart');
    }
    public function orderSummeryView(Request $request){
        return view('webSite.orderSummery'); 
    }

    /*
    
    public function getCartItemCount()
    { 
        $itemCount = Cart::where('user_id', 'U001')
            ->where('status', 0)
            ->count(); 
        return response()->json(['itemCount' => $itemCount]); 
    } 

    public function getEmailBodyData(Request $request){
        $order_id = request()->cookie('order_id');

        // Assuming $order_id contains the specific order_id you want to filter by
        $carts = Cart::where('order_id', $order_id)
           ->join('items', 'carts.item_id', '=', 'items.item_id')
           ->select('carts.*', 'items.name','items.discount') 
           ->get();
 
        return view('emails.order_confirm_mail', ['carts' => $carts]); 
    }*/
       
    
}
