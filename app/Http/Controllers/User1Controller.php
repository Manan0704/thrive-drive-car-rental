<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User1;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Response;

class User1Controller extends Controller
{
    public function index()
    {
     return view("register");
    }

    public function register(Request $request) {
        
        $request->validate([
            "fname"=> "required",
            "lname"=> "required",
            // "role" => "required",
            "profileimg" => "required",
            "email"=>"required | email",
            "password"=>"required | min:8 | max:12",
            "securityque_type" => "required",
            "securityans_type" => "required",
            
        ]);

        //Img code
        $imgName="profileimg_".time().".".$request->profileimg->extension();
        $request->profileimg->move(public_path('img'),$imgName);

        $table = new User1();
        $table->fname = $request->fname;
        $table->lname = $request->lname;
        $table->role = $request->role;
        $table->profileimg=asset('img')."/".$imgName;
        $table->email = $request->email;
        $table->password = $request->password;
        $table->securityque_type = $request->securityque_type;
        $table->securityans_type = $request->securityans_type;
        //dd($table);
        $table->save();


        return redirect('/login')->withSuccess("Registered Success");
    }

    public function home(){
        $cats=Category::get();
        $vehicle=Vehicle::get();
        return view('home',compact('cats','vehicle'));
    }

    

    public function services(){
        return view('services');
    }

    public function blog(){
        return view('blog');
    }

    public function explore() {
        $vehicle = Vehicle::get(); // Ensure you fetch data
        return view('explore', compact('vehicle'));
    }

    // public function bycat($category) {
    //     $vehicle = Vehicle::where('Category_name', $category)->get();
    //     return view('explore', compact('vehicle'));
    // }

    public function bycat($id) {
        $vehicles = Vehicle::where('category', $id)->get();
    
        // Debugging: Check if vehicles data is retrieved
        if ($vehicles->isEmpty()) {
            return "No cars found for category ID: " . $id;
        }
    
        return view('explore', compact('vehicles'));
    }
    
    
    
    

    //function which will show admin the users
    public function getalluser(){
        $data=User1::get();
        return view('adminuser',compact('data'));
    }

    public function detail($id)
    {
        $vehicle=Vehicle::where('_id',$id)->first();
        // print_r($product);
        return view('productdetail',compact('vehicle'));
    }

    public function index1(){
        return view('login');
    }
    public function login(Request $request) {
        
        $request->validate([
            "email"=>"required",
            "password"=>"required",
            //"role" => "required"
        ]);
        $data=User1::where("email",$request->email)->where("password",$request->password)->first();

        if(strcasecmp($request->email,"admin@gmail.com")==0 && strcasecmp($request->password,"admin")==0){
            return redirect('/');
        }
        else if($data!=null){
            session()->put("user",$data);
            return redirect('/');
        }else{
            return back()->withSuccess("Invalid Username/Password");
        }
    }
    public function admin()  {

        $c_count=Category::count();
        $u_count=User1::count();
        $p_count=Vehicle::count();
        $o_count=Cart::where('status',1)->count();
        $r=Cart::where('status',1)->sum('total');
        $orders=Cart::where('status',1)->latest()->get();
        return view('adminhome',compact('c_count','u_count','p_count','o_count','r','orders'));

    }


    public function profile(Request $request) {

        $request->validate([
            "fname"=> "required",
            "lname"=> "required",
            "role" => "required",
            "email"=>"required | email",
            "password"=>"required | min:8 | max:12",
            "securityque_type" => "required",
            "securityans_type" => "required",
            
        ]);
        
        // $cats=Category::get();
        $user=session()->get('user');
        $table=User1::where('_id',$user->id)->first();

        $table->fname = $request->fname;
        $table->lname = $request->lname;
        $table->role = $request->role;
        $table->email = $request->email;
        $table->password = $request->password;
        $table->securityque_type = $request->securityque_type;
        $table->securityans_type = $request->securityans_type;

        $table->save();


        session()->put('user',$table);
        return redirect("/");
        
    }

    public function logout(){
        session()->flush();  // Clears all session data
        return redirect('/');
    }

    public function verifyEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // Manually check if the email exists in MongoDB
        $user = User1::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'This email is not registered.']);
        }

        // Proceed to the next step (security question)
        $email=$request->email;

        return view('security_question',compact('user'));
    }

    public function verifySecurityAnswer(Request $request) {
        // $request->validate([
        //     'securityque_type' => 'required',
        //     'securityans_type' => 'required',
        // ]);
    
        $user = User1::where('email', $request->email)->first();
        // dd($user);
        if (strcasecmp($user->securityans_type,$request->securityans_type)==0) {
            return view('resetpassword',compact('user'));
        } else {
            return back()->withErrors(['securityans_type' => 'Incorrect security answer']);
        }
    }

    public function resetPassword(Request $request)
    {
        // $request->validate([
        //     'newpassword' => 'required|min:8|confirmed',
        //     'retypepassword' => 'required | same:newpassword'
        // ]);

        $user = User1::find($request->id);
        // dd($user);

        if ($user) {
            $user->password =$request->newpassword;
            $user->save();
            return redirect('/')->with('success', 'Password reset successfully!');
        } else {
            return back()->withErrors(['email' => 'User not found.']);
        }
    }
    
    public function changePass(Request $request)
    {
        // Validate input
        $request->validate([
            "old_password" => "required",
            "new_password" => "required|min:8|max:12",
            "confirm_password" => "required|same:new_password",
        ]);

        // Get the admin from session and refresh from database
        $admin = User1::find(session()->get('user')->id);
        if (!$admin) {
            return back()->withErrors(['error' => 'Admin not found or not logged in']);
        }

        // Check if old password is correct
        if (strcmp(trim($request->old_password), $admin->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        // Update password
        $admin->password = $request->new_password; // Storing as plain text (insecure)  

        try {
            $admin->save();

            // Logout the user and clear session
            session()->forget('user'); 
            auth()->logout();  // Ensure Laravel auth is used

            // Redirect to login with success message
            return redirect('/')->with('success', 'Password changed successfully! Please log in again.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to update password: ' . $e->getMessage()]);
        }
    }
}
