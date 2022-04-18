<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop_Category;

class ShopCategoryController extends Controller
{
	   public function index()
    {
        $shops_cat= Shop_Category::all();
        return view('Admin.shops_category',compact('shops_cat'));
    }

       public function create()
    {
        return view('Admin.add_shop_category');
    }

    public function store(Request $request)
    {

      	$shop_cat= new Shop_Category;

    	$shop_cat->category=$request->category;
    	$shop_cat->save();

    	return redirect('Admin/shops_category');
    }

     public function edit($id)
    {

        $shop_cat=Shop_Category::where('id',$id)->first();
        return view('Admin/edit_shop_category',compact('shop_cat'));
    }

     public function update(Request $request,$id)
    {
        $shop_cat=Shop_Category::where('id',$id)->update([
            'category'=>$request->category,
        ]);
        return redirect('Admin/shops_category');
    }

     public function destroy($id)
    {
        $member = Shop_Category::where('id',$id)->delete();
        return redirect('Admin/shops_category');
    }

}
