<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

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
            'tags.*' => 'in:'.implode(',', \App\Tag::all()->pluck('id')->toArray())
        ]);
        //dd($validatedPost);
        $post = new \App\Post;
        $post -> user_id = $validatedPost['user_id'];
        $post -> category_id = $validatedPost['category_id'];
        $post -> title = $validatedPost['title'];
        $post -> slug = $validatedPost['slug'];
        $post -> description = $validatedPost['description'];
        $post -> body = $validatedPost['body'];
        $post -> save();

        $url = 'https://api.telegram.org/bot946199061:AAFeEKMYjIsRv-xLxSGcZt8J9BoRB_or7Ig/sendPhoto';
        $params =[

            'chat_id' => '-1001431422401',
            'photo' => 'https://cdn4.wpbeginner.com/wp-content/uploads/2018/07/whatisblog.png',
            'caption' => 'Появился новый пост в блоге '. $post-> title . '',
        ];

        $url = $url . '?' . http_build_query($params);

        $client = new Client();
        $client->get($url, [
                'headers' =>[
                    'Content-Type' =>'multipart/form-data',
                ],
            ]);

        return redirect()->route('posts.index')->with('success', "Создание поста '{$post->title}' прошло успешно.");
    }
//    public function show(\App\Post $post){
//
//    }
    public function edit(\App\Post $post){

        return view('/admin/posts/post-update', ['post'=>$post]);

    }
    public function update(\App\Post $post, Request $request){

        $validatedPost = $request->validate([

            'description' => 'required|unique:posts,description|min:10|max:50' . $post->id,
            'body' => 'required|unique:posts,body|min:10|max:50' . $post->id,
            'tags.*' => 'in:'.implode(',', \App\Tag::all()->pluck('id')->toArray())
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
