<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::get(); //select * from category

        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            "Category_name"=>"required | unique:category",
            "Image"=>"required"
        ]);

        $imgname="category_".time().".".$request->Image->extension();
        $request->Image->move(public_path('img'),$imgname);
        $imgPath=asset('img')."/".$imgname;

         //insert code
         $table=new Category();
         $table->Category_name=$request->Category_name;
         $table->Image=$imgPath;
         $table->save();
        
        return redirect('category')->withSuccess("inserted");
    
    
    }

       

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view("category.edit",compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
         //db update

        
         $request->validate(
            [
                "Category_name"=>"required",
                
            ]
        );
        //Img code
        $table=Category::find($category->_id);
        if(isset($request->category_pic)){
            $imgName="category_".time().".".$request->category_pic->extension();
            $request->category_pic->move(public_path('img'),$imgName);
            $table->category_pic=asset('img')."/".$imgName;
        }
      

         //insert code
        $table->Category_name=$request->Category_name;
        
        $table->save();

        return redirect("category")->withSuccess("Updated successfully!!!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('category')->withSuccess("deleted");
    }
}
