<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController{

    public function index(){

        return view('/admin/categories/category-list', ['categories' => \App\Category::all()]);



    }
    public function create(){

        return view('/admin/categories/category-create');

    }
    public function store(Request $request){

        $validatedCategory = $request->validate([
            'title' => 'required|unique:categories,title|min:3|max:25|alpha',
            'slug' => 'required|unique:categories,slug|min:3|max:25|alpha_dash',
        ]);

        $category = new \App\Category;
        $category -> title = $validatedCategory['title'];
        $category -> slug = $validatedCategory['slug'];
        $category -> save();

        return redirect()->route('categories.index');
    }
    public function show(\App\Category $category){

    }
    public function edit(\App\Category $category){

    }
    public function update(\App\Category $category){

    }
    public function destroy(\App\Category $category){

        $category->delete();

        return redirect()->route('categories.index');
    }
}
