<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller {

    public function index(){

        return view('/admin/posts/post-list', ['posts' => \App\Post::all()]);

    }
    public function create(){


        return view('admin/posts/post-create');

    }
    public function store(Request $request){

        $validatedPost = $request->validate([
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|unique:posts,title|min:5|max:50',
            'slug' => 'required|unique:posts,slug|min:5|max:10',
            'description' => 'required|unique:posts,description|min:10|max:50',
            'body' => 'required|unique:posts,body|min:10|max:50',
        ]);

        $post = new \App\Post;
        $post -> user_id = $validatedPost['user_id'];
        $post -> category_id = $validatedPost['category_id'];
        $post -> title = $validatedPost['title'];
        $post -> slug = $validatedPost['slug'];
        $post -> description = $validatedPost['description'];
        $post -> body = $validatedPost['body'];
        $post -> save();


        return redirect()->route('posts.index')->with('success', "Создание поста '{$post->title}' прошло успешно.");
    }
    public function show(\App\Post $post){

    }
    public function edit(\App\Post $post){

        return view('/admin/posts/post-update', ['post'=>$post]);

    }
    public function update(\App\Post $post, Request $request){

        $validatedPost = $request->validate([

            'description' => 'required|unique:posts,description|min:10|max:50' . $post->id,
            'body' => 'required|unique:posts,body|min:10|max:50' . $post->id,
        ]);


        $post -> description = $validatedPost['description'];
        $post -> body = $validatedPost['body'];
        $post->updated_at = \Carbon\Carbon::now();
        $post -> save();

        return redirect()->route('posts.index')->with('success', "Изменения поста '{$post->title}' прошли успешно.");

    }
    public function destroy(\App\Post $post){

        $post->delete();

        return redirect()->route('posts.index')->with('success', "Удаление поста '{$post->title}' прошло успешно.");
    }
}
