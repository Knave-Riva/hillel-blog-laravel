<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController{

    public function index(){

        return view('/admin/posts/post-list', ['posts' => \App\Post::all()]);

    }
    public function create(){

        return view('/admin/categories/category-create');

    }
    public function store(Request $request){
//
//        $validatedCategory = $request->validate([
//            'title' => 'required|unique:categories,title|min:3|max:25|alpha',
//            'slug' => 'required|unique:categories,slug|min:3|max:25|alpha_dash',
//        ]);
//
//        $category = new \App\Category;
//        $category -> title = $validatedCategory['title'];
//        $category -> slug = $validatedCategory['slug'];
//        $category -> save();
//
//        return redirect()->route('categories.index')->with('success', "Создание катекории '{$category->title}' прошло успешно.");
    }
    public function show(\App\Post $post){

    }
    public function edit(\App\Post $post){
//
//        return view('/admin/categories/category-update', ['category'=>$category]);
//
    }
    public function update(\App\Post $post, Request $request){
//
//        $validatedCategory = $request->validate([
//            'title' => 'required|min:3|max:25|alpha|unique:categories,title,' . $category->id,
//            'slug' => 'required|min:3|max:25|alpha_dash|unique:categories,slug,' . $category->id,
//        ]);
//
//        $category->title = $validatedCategory['title'];
//        $category->slug = $validatedCategory['slug'];
//        $category->updated_at = \Carbon\Carbon::now();
//        $category->save();
//
//        return redirect()->route('categories.index')->with('success', "Изменения катекории '{$category->title}' прошли успешно.");
//
    }
    public function destroy(\App\Post $post){
//
//        $category->delete();
//
//        return redirect()->route('categories.index')->with('success', "Удаление катекории '{$category->title}' прошло успешно.");
    }
}
