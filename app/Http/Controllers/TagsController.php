<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController{

    public function index(){

        return view('/admin/tags/tag-list', ['tags' => \App\Tag::all()]);
    }
    public function create(){

        return view('/admin/tags/tag-create');

    }
    public function store(Request $request){

        $tags= new \App\Tag;
        $tags->name=$request->name;
        $tags->slug=$request->slug;
        $tags->save();

        return redirect()->route('tags.index');
    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(\App\Tag $tag){

        $tag->delete();

        return redirect()->route('tags.index');

    }

}
