<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RazorpayController;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [User1Controller::class,"home"]);
Route::get('/admin',[User1Controller::class,'admin']);

Route::get("/about", function()  {
    return View('about');
});


Route::get("/contact", function()  {
    return View('contact');
});

Route::get('/explore',[User1Controller::class,'explore']);
// Route::get('/bycat/{id}',[User1Controller::class,'bycat']);
Route::get('/bycat{category}', [User1Controller::class, 'bycat']);

Route::resource("category",CategoryController::class);       
Route::get('/register', [User1Controller::class,'index']);
Route::post('/register_user',[User1Controller::class,'register']);

Route::get('/services',[User1Controller::class,"services"]);

Route::get('/blog',[User1Controller::class,"blog"]);

Route::resource("/vehicle",VehicleController::class);

//Route::resource("/testt",ProductController::class);

Route::get('/users', [User1Controller::class,"getalluser"]);
Route::get('/check', [CheckController::class,"index"]);

Route::get("/detail/{id}",[User1Controller::class,'detail']);

Route::get('/login',[User1Controller::class,"index1"]);
Route::post('/login_user',[User1Controller::class,"login"]);

Route::get('/addcart/{id}',[CartController::class,'addtocart']);

// Route::get('order',[CartController::class,'index']);

Route::get('/cart',[CartController::class,'getCartItem']);
Route::get('/minus/{id}',[CartController::class,'minus']);
Route::get('/plus/{id}',[CartController::class,'plus']);
Route::get('/confirm',[CartController::class,'confirm']);
Route::get('/remove/{id}',[CartController::class,'removeCart']);
Route::get('/addcart/{id}',[CartController::class,'addtocart'])->name('addcart');
Route::get('/openrent/{id}',[CartController::class,'openrent']);
// Route::post('/rent',[CartController::class,'rent']);

Route::get('/cart',[CartController::class,'getCartItem']);
Route::get('/confirm',[CartController::class,'confirm']);
Route::get('/remove/{id}',[CartController::class,'removeCart']);
Route::get('/addcart/{id}',[CartController::class,'addtocart']);
//Route::get('/orders',[CartController::class,'orders']);



Route::get('/bookings', [CartController::class, 'orders']);


Route::get('/unrent/{id}',[VehicleController::class,'unrent']); 
Route::get('/logout', function () {
    session()->flush();  // Clears all session data
    return redirect('/');
});

//Payment
Route::get('/razorpay',[RazorpayController::class,'index']);
Route::post('/razorpay/payment',[RazorpayController::class,'payment'])->name('razorpay.payment');
Route::get('/payment-success', function(Request $request) {
    $payment_id = $request->query('payment_id');
    // Save payment to DB, clear cart, etc.
    return redirect()->back()->with('success', 'Payment successful! Payment ID: ' . $payment_id);
    
});

Route::get('/cart', function () {
    $user_id = Auth::id();
    $data = Cart::where('user_id', $user_id)->get();
    $total = $data->sum('total');

    return view('cart', compact('data', 'total'));
});

// // Payment success route (called by Razorpay)
// Route::get('/payment-success', function (Request $request) {
//     $payment_id = $request->query('payment_id');
//     $user_id = Auth::id();

//     // ✅ Get user's cart items
//     $cartItems = Cart::where('user_id', $user_id)->get();

//     foreach ($cartItems as $item) {
//         // ✅ Save each item as an order
//         Order::create([
//             'user_id' => $user_id,
//             'fname' => Auth::user()->name ?? 'Guest',
//             'ppic' => $item->ppic,
//             'pname' => $item->pname,
//             'price' => $item->price,
//             'numofdays' => $item->numofdays,
//             'totalAmount' => $item->total,
//             'payid' => $payment_id, // ✅ Razorpay Payment ID
//             'status' => 'paid',
//         ]);
//     }

//     // ✅ Optional: clear the cart
//     Cart::where('user_id', $user_id)->delete();

//     // ✅ Redirect with a SweetAlert success
//     return redirect('/cart')->with('success', 'Order placed successfully!');
// });
