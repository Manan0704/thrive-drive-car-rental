<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Package;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    //
    public function cart()
    {
        $data = Cart::all();
        $total = $data->sum('total_amount');

        return view('cart', compact('data', 'total'));
    }


    public function getCartItem()
    {
        $user = session()->get('user');
        if ($user != null) {
            $total = Cart::where('status', 0)
                ->where('uid', $user->_id)->sum('total');

            $address = $user->fname;

            $data = Cart::where('status', 0)
                ->where('uid', $user->_id)->get();
            return view('cart', compact('data','total','address'));
        } else {
            return redirect("login")->withSuccess("Login to continue....");
        }
    }

    // public function addtocart(Request $request,$id)
    // {
    // $user = session()->get('user');

    // if ($user !== null) {
    //     // Check if the product exists
    //     $vehicle = Vehicle::find($id);
        
    //     if (!$vehicle) {
    //         return back()->withErrors(['Product not found.']);
    //     }

    //     // Calculate number of rental days
    //     $days = (strtotime($request->drop_off_date) - strtotime($request->pick_up_date)) / (60 * 60 * 24);
    //     // $totalPrice = $days * $vehicle->price;
    //     $totalPrice = max(1, $days) * $vehicle->price; // Ensuring at least 1 day is counted

        
    //     // Check if the cart entry already exists
    //     // $cart = Cart::where('status', 0)
    //     //     ->where('pid', $id)
    //     //     ->where('uid', $user->_id) // Ensure it's for the current user
    //     //     ->first();
    //     $cart = Cart::where('status', 0)
    //         ->where('pid', $id)
    //         ->where('uid', $user->_id)
    //         ->first()
    //         ->sum('total');

        
    //     if ($cart === null) {
    //         // Create a new cart entry
    //         $cart = new Cart();
    //         $cart->uid = $user->_id;
    //         $cart->pid = $id;
    //         $cart->pname = $vehicle->vehicle_name;
    //         $cart->ppic = $vehicle->vehicle_pic;
    //         $cart->price = (int) $vehicle->price;
    //         $cart->username = $user->username;
    //         //$cart->qty = 1;
    //         // $cart->total = (int) $vehicle->price;
    //         $cart->total = (int) $totalPrice;
    //         $cart->status = 0;
    //         $cart->date = now(); // Use Carbon for better date handling
    //         $cart->save();
    //     } else {
    //         // // Update the existing cart entry
    //         // $cart->qty += 1;
    //         // $cart->total = $cart->qty * $cart->price;
    //         // $cart->save();
    //     }

    //     return redirect('cart');

    //     } 
    //     else {
    //     return redirect("login")->withSuccess("Login to continue....");
    //     }
    // }

    public function addtocart(Request $request, $id)
{
    $user = session()->get('user');

    if ($user !== null) {
        $vehicle = Vehicle::find($id);
        
        if (!$vehicle) {
            return back()->withErrors(['Vehicle not found.']);
        }

        // Validate date inputs
        // $request->validate([
        //     'pickupdate' => 'required',
        //     'endofdate' => 'required',
        // ]);

        // Calculate rental days
        $days = (strtotime($request->endofdate) - strtotime($request->pickupdate)) / (60 * 60 * 24);
        $days = max(1, $days); // Ensure at least 1 day

        // Calculate total price
        $totalPrice = $days * $vehicle->price;

        // Check if the cart entry already exists
        $cart = Cart::where('status', 0)
            ->where('pid', $id)
            ->where('uid', $user->_id)
            ->first();
        
        if ($cart === null) {
            $cart = new Cart();
            $cart->uid = $user->_id;
            $cart->pid = $id;
            $cart->pname = $vehicle->vehicle_name;
            $cart->ppic = $vehicle->vehicle_pic;
            $cart->price = (int) $vehicle->price;
            $cart->fname = $user->fname;
            $cart->qty = 1;
            $cart->numofdays = $days;
            $cart->total = (int) $totalPrice;
            $cart->status = 0;
            $cart->date = now();
            $cart->save();
        } else {
            // Update existing cart entry
            $cart->numofdays = $days;
            $cart->total = $days * $cart->price;
            $cart->save();
        }

        return redirect('cart')->withSuccess("Vehicle added to cart!");
    } else {
        return redirect("login")->withErrors("Login to continue...");
    }
}



    public function removeCart($id)
    {
        $cart = Cart::where("_id", $id)->delete();
        return redirect('cart');
    }

    public function orders()
    {
    // dd("Controller reached");
    $data = Cart::where('status', 1)->get();
    // dd($data);
    return view('order', compact('data'));
    }


    public function confirm(){
        $user=session()->get('user');

        $data=Cart::where('uid',$user->_id)
        ->where('status',0)
        ->get();
        foreach($data as $i){
            $i->status=1;
            $i->save();
        }
        return back()->withSuccess("Order Placed Successfully!!!");
    }

    // public function confirmOrder()
    // {
    //     // Get the current logged-in user
    //     $user = session()->get('user');
        
    //     if ($user) {
    //         // Get all cart items for the user
    //         $cartItems = Cart::where('status', 0)->where('uid', $user->_id)->get();
            
    //         if ($cartItems->isEmpty()) {
    //             return redirect('cart')->withErrors('Your cart is empty!');
    //         }
            
    //         // Loop through the cart items and prepare the data for the order
    //         foreach ($cartItems as $cartItem) {
    //             // Create a new Order for each cart item
    //             $order = new cart();
    //             $order->uid = $user->_id;
    //             $order->pname = $cartItem->pname;
    //             $order->ppic = $cartItem->ppic;
    //             $order->price = $cartItem->price;
    //             $order->pickupdate = $cartItem->pickupdate;
    //             $order->endofdate = $cartItem->endofdate;
    //             $order->numofdays = $cartItem->numofdays;
    //             $order->total = $cartItem->total;
    //             $order->status = 'Confirmed'; // Set the order status as 'Confirmed'
    //             $order->created_at = now();
    //             $order->save();
                
    //             // Optional: Mark the cart item as confirmed
    //             $cartItem->status = 1; // Update status to 1 (confirmed)
    //             $cartItem->save();
    //         }
            
    //         // Redirect user to the confirmation page with a success message
    //         return redirect('order/confirmation')->with('success', 'Your order has been confirmed!');
    //     } else {
    //         return redirect('login')->withErrors('Please log in to confirm your order.');
    //     }
    // }


    public function minus($id)
    {
        $cart = Cart::where("_id", $id)->first();
        if ($cart->qty != 1) {
            $cart->qty = $cart->qty - 1;
            $cart->total = $cart->qty * $cart->price;
            $cart->save();
        }
        return redirect('cart');
    }


    public function plus($id)
    {
        $cart = Cart::where("_id", $id)->first();
        if ($cart->qty != 10) {
            $cart->qty = $cart->qty + 1;
            $cart->total = $cart->qty * $cart->price;
            $cart->save();
        }
        return redirect('cart');
    }

    
}