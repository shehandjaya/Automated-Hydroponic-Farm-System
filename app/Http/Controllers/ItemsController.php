<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\CheckoutConfirmation; 
use Illuminate\Support\Facades\Mail;
use Google_Client;
use Google_Service_Gmail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index()
    {
         
         
         $items = Item::all(); 
         return view('webSite.store', ['items' => $items]); 
    }
    public function searchItem($name)
    {   
        $items = DB::table('items')
        ->where('name', 'LIKE', '%' . $name . '%') 
        ->get();
         return view('webSite.store', ['items' => $items]); 
    }
    public function custom_item($item_id)
    {
    
        $items = Item::where('item_id', $item_id); 
         if (!$items) {
           abort(404); // Item not found, return a 404 error
         }
        return view('webSite.store', ['items' => $items]); // Pass 'item' instead of 'items'
    }

    public function search(Request $request) {
        if ($request->ajax()) {
            $output = "";
            $searchTerm = $request->search;
            
            if (empty($searchTerm)) {
                return response()->json(['status' => 'empty']);
            }
    
            $items = DB::table('items')
                ->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->take(4)
                ->get();
    
            if ($items->isNotEmpty()) {
                foreach ($items as $key => $item) {
                     $output .= '<tr>' .
                     '<td><a href="http://127.0.0.1:8000/custom_item/' . $item->item_id . '">' . $item->name . '</a></td>' .
                        '</tr>';   
                }
                return Response($output);
            } else {
                return response()->json(['status' => 'empty']);
            }
        } else {
            return response()->json(['status' => 'empty']);
        }
    }
    
    

    public function cart()
    {
        return view('cart');
    }
    
    public function sendCheckoutConfirmationEmail(Request $request)
    {
       
        $order_id = $request->input('order_id');

        $lastOrderId = DB::table('orders')
        ->select('order_id') 
        ->orderBy('order_id', 'desc') 
        ->first(); 
        $order_id = $lastOrderId->order_id;

        $carts = Cart::where('order_id', $order_id)
           ->join('items', 'carts.item_id', '=', 'items.item_id')
           ->select('carts.*', 'items.name','items.discount') 
           ->get();
        try {
            Mail::to(Auth::user()->email)->send(new CheckoutConfirmation($carts)); 
            
        } catch (Exception $e) { 
            echo "Email sending failed: " . $e->getMessage(); 
            
        } 
        
        
    }
    
    public function addToDb(Request $request){
        // Check if the 'cart' cookie exists and is not empty
        if (isset($_COOKIE['cart']) && !empty($_COOKIE['cart'])) {
            $cartItems = json_decode($_COOKIE['cart'], true);


            $total = 0; // Initialize total

            foreach ($cartItems as $cartItem) {
                $quantity = $cartItem['quantity'];
                $price = $cartItem['price'];
                $discount = $cartItem['discount'];

                $amount = $price * $quantity * (1 - $discount / 100);
                $total += $amount; // Update total
            }
    
            $user_id = Auth::user()->id;          
            $formatted_user_id = sprintf("U%03d", $user_id);
             
            $order = Order::create([ 
                'user_id' => $formatted_user_id,
                'total' => $total, 
            ]);
            $order_id = $order->order_id;  

            foreach ($cartItems as $cartItem) {
                // Assuming $cartItem is an associative array with keys 'itemId', 'quantity', and 'price'
                $itemId = $cartItem['itemId'];
                $quantity = $cartItem['quantity'];
                $price = $cartItem['price'];
                $discount = $cartItem['discount'];
    
                // Calculate the total amount for the item
                if($discount==0){
                    $amount = $price * $quantity;
                }else{
                  $amount = $price * $quantity * (1-$discount/100);
                }

                 
                // Create a new Cart record in the database
                Cart::create([
                    'order_id' => $order_id,
                    'user_id' => $formatted_user_id,
                    'item_id' => $itemId,
                    'quantity' => $quantity,
                    'amount' => $amount,
                    'feedback' => '', 
                    'status' => 1,    
                ]);

            }   
            setcookie('cart', '', time() - 3600, '/');
            //Cookie::queue('order_id', $order_id, 1440);
            
        }
        
        $this->sendCheckoutConfirmationEmail($request);
        
        return redirect()->route('items');
    }
    
     

   
}   
 