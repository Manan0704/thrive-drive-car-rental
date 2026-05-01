<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Vehicle::get();
        return view('vehicle.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('vehicle.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "vehicle_name" => "required",
            "category" => "required",
            "vehicle_desc" => "required",
            "fuel_type" => "required",
            "color" => "required",
            "vehicle_type" => "required",
            "seater" => "required",
            "engine" => "required",
            "price" => "required|min:1", // Corrected here
            "vehicle_pic" => "required|image" // Added validation for an image
        ]);
    
        // Img code
        $imgname = "Vehicle_" . time() . "." . $request->vehicle_pic->extension(); // Corrected 'product_pic' to 'vehicle_pic'
        $request->vehicle_pic->move(public_path('img'), $imgname); // Corrected 'product_pic' to 'vehicle_pic'
        $imgPath = asset('img') . "/" . $imgname;
    
        $table = new Vehicle();
        $table->vehicle_name = $request->vehicle_name;
        $table->category = $request->category;
        $table->vehicle_desc = $request->vehicle_desc;
        $table->fuel_type = $request->fuel_type;
        $table->color = $request->color;
        $table->vehicle_type = $request->vehicle_type;
        $table->seater = $request->seater;
        $table->status=0;
        $table->engine = $request->engine;
        $table->price = $request->price;
        $table->vehicle_pic = $imgPath;
        $table->save();
    
        return redirect("vehicle")->with('success', "Inserted Successfully!!!");
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
        $categories = Category::get();
        return view('vehicle.edit', compact('vehicle', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $table = Vehicle::find($vehicle->_id);
        //
        if (isset($request->vehicle_pic)) {
            $imgname = "Vehicle_" . time() . "." . $request->product_pic->extension();
            $request->product_pic->move(public_path('img'), $imgname);
            $imgPath = asset('img') . "/" . $imgname;
            $table->vehicle_pic = $imgPath;
        }


        $table->vehicle_name = $request->vehicle_name;
        $table->category = $request->category;
        $table->vehicle_desc = $request->vehicle_desc;
        $table->fuel_type = $request->fuel_type;
        $table->color = $request->color;
        $table->vehicle_type = $request->vehicle_type;
        $table->seater = $request->seater;
        $table->engine = $request->engine;
        $table->price = $request->price;
        $table->status=0;

        $table->save();

        return redirect("vehicle")->withSuccess("Updated Successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vehicle::where('_id', $id)->delete();
        return redirect('vehicle')->withSuccess("Deleted Successfully!!!");
    }
}
