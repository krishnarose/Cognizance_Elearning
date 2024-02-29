<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view ('admin.category.create');
    }

    public function store(Request $request){
      $newCategory = new Category;
      $newCategory->title = $request->title;
      $newCategory->slug = Str::slug($request->slug);
      $newCategory->description = $request->description;
      $newCategory->image = $request->image;
      $newCategory->meta_title = $request->meta_title;
      $newCategory->meta_description = $request->meta_description;
      $newCategory->save();
      return redirect()->back()->with('success','Category created successfully!');
    }
}
