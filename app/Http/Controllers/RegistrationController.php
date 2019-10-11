<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegistrationController extends Controller {

    public function create(){

        return view('/admin/reg_form');
    }

    public function store(Request $request){

        $validatedUser = $request->validate([
            'name' => 'required|unique:name|min:3|max:25',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:25|alpha_dash',
            'confirm_password'=> 'required|min:6|max:25|alpha_dash'

        ]);

        if ($validatedUser['password'] === $validatedUser['confirm_password']) {
            $user = new \App\User;
            $user->name = $validatedUser['name'];
            $user->email = $validatedUser['email'];
            $user->password = dcrypt($validatedUser['password']);
            $user->save();
        }else echo ('ошибка');

        return redirect()->route('logins.member')->with('success', "Создание тега '{$user->name}' прошло успешно.");
    }

}

//    public function index(){
//
//        return view('/admin/tags/tag-list', ['tags' => \App\Tag::all()]);
//
//
//
//    }
//    public function create(){
//
//        return view('/admin/tags/tag-create');
//
//    }
//    public function store(Request $request){
//
//        $validatedTag = $request->validate([
//            'name' => 'required|unique:tags,name|min:3|max:25',
//            'slug' => 'required|unique:tags,slug|min:3|max:25|alpha_dash',
//        ]);
//
//        $tag = new \App\Tag;
//        $tag -> name = $validatedTag['name'];
//        $tag -> slug = $validatedTag['slug'];
//        $tag -> save();
//
//        return redirect()->route('tags.index')->with('success', "Создание тега '{$tag->name}' прошло успешно.");
//    }
//    public function show(\App\Tag $tag){
//
//    }
//    public function edit(\App\Tag $tag){
//
//        return view('/admin/tags/tag-update', ['tag'=>$tag]);
//
//    }
//    public function update(\App\Tag $tag, Request $request){
//
//        $validatedTag = $request->validate([
//            'name' => 'required|min:3|max:25|unique:tags,name',
//            'slug' => 'required|min:3|max:25|alpha_dash|unique:tags,slug',
//        ]);
//
//
//        $tag->name = $validatedTag['name'];
//        $tag->slug = $validatedTag['slug'];
//        $tag->updated_at = \Carbon\Carbon::now();
//        $tag->save();
//
//        return redirect()->route('tags.index')->with('success', "Изменения Тега '{$tag->name}' прошли успешно.");
//
//    }
//    public function destroy(\App\Tag $tag){
//
//        $tag->delete();
//
//        return redirect()->route('tags.index')->with('success', "Удаление катекории '{$tag->name}' прошло успешно.");;
//    }

