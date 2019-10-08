<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller{

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

        return redirect()->route('categories.index')->with('success', "Создание катекории '{$category->title}' прошло успешно.");
    }
    public function show(\App\Category $category){

    }
    public function edit(\App\Category $category){

        return view('/admin/categories/category-update', ['category'=>$category]);

    }
    public function update(\App\Category $category, Request $request){

        $validatedCategory = $request->validate([
            'title' => 'required|min:3|max:25|alpha|unique:categories,title,' . $category->id,
            'slug' => 'required|min:3|max:25|alpha_dash|unique:categories,slug,' . $category->id,
        ]);

        $category->title = $validatedCategory['title'];
        $category->slug = $validatedCategory['slug'];
        $category->updated_at = \Carbon\Carbon::now();
        $category->save();

        return redirect()->route('categories.index')->with('success', "Изменения катекории '{$category->title}' прошли успешно.");

    }
    public function destroy(\App\Category $category){

        $category->delete();

        return redirect()->route('categories.index')->with('success', "Удаление катекории '{$category->title}' прошло успешно.");;
    }
}
