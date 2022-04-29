<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop_Category;
use App\Models\Sub_Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     public function __construct()
    {
        $this->middleware('auth:admin');
    }
        
    public function index()
    {
        $sub_cat= Sub_Category::all();
        return view('Admin.sub_category',compact('sub_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop_category= Shop_Category::all();
        $sub_category= Sub_Category::all();
        return view('Admin.add_sub_category',compact('shop_category','sub_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $sub_cat= new Sub_Category;

        $sub_cat->shop_category_id=$request->shop_category;
        $sub_cat->sub_category=$request->sub_category;
        $sub_cat->save();

        return redirect('Admin/sub_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $shop_category= Shop_Category::all();
        $sub_category= Sub_Category::where('id',$id)->first();
        return view('Admin/edit_sub_category',compact('shop_category','sub_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $sub_cat=Sub_Category::where('id',$id)->update([
            'shop_category_id'=>$request->shop_category,
            'sub_category'=>$request->sub_category,
        ]);
        return redirect('Admin/sub_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sub = Sub_Category::where('id',$id)->delete();
        return redirect('Admin/sub_category');
    }
}
