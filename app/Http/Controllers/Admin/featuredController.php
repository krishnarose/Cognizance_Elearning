<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\FeaturedCategory;

class featuredController extends Controller
{
    public function View_featured_categories(){
        $categories =category::all();

        return view ('admin.featured.category',compact('categories'));
    }

    public function store_featured_category(Request $request){

        $category = FeaturedCategory::find($request->category_id);

        if($category){
            return redirect('/admin/featured/categories')->with('error','category already add to featured list');
        }
        else{
        $featuredCategory = new FeaturedCategory;
        $featuredCategory->category_id=$request->category_id;
        $featuredCategory->save();

        return redirect('/admin/featured/categories')->with('success','category successfully add to featured categories');

        }
    }


    public function View_featured_courses(){
        return view ('admin.featured.courses');
    }
}
