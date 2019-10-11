<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Foundation\Auth\User;
use \Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
//use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{

    public function index(){

        return view('/admin/login');



    }
//    public function create(){
//
//        return view('/admin/tags/tag-create');
//
//    }
    public function auth(Request $request){

        $validatedEmail = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:25|alpha_dash',
        ]);

        $email = $validatedEmail['email'];
        $password = $validatedEmail['password'];
        $credentials = [
            'email' => $email,
            'password' => $password
         ];


        if (Auth::attempt($credentials)) {

            return  redirect()->route('logins.member');
        }

    }
    public function member(){

        $user = Auth::user();

        dd($user);
    }
    public function logout(){

        Auth::logout();

        return  redirect()->route('logins.index');
    }

//    public function show(){
//
//        $user = Auth::user();
//
//        dd($user);
//
//    }
//    public function edit(\App\Tag $tag){
//
//        return view('/admin/tags/tag-update', ['tag'=>$tag]);
//
//    }
//    public function update(\App\Tag $tag, Request $request){
//
////        $validatedTag = $request->validate([
////            'name' => 'required|min:3|max:25|unique:tags,name',
////            'slug' => 'required|min:3|max:25|alpha_dash|unique:tags,slug',
////        ]);
//
//
////        $tag->name = $validatedTag['name'];
////        $tag->slug = $validatedTag['slug'];
////        $tag->updated_at = \Carbon\Carbon::now();
////        $tag->save();
////
////        return redirect()->route('tags.index')->with('success', "Изменения Тега '{$tag->name}' прошли успешно.");
//
//    }
//    public function destroy(\App\Tag $tag){
//
////        $tag->delete();
////
////        return redirect()->route('tags.index')->with('success', "Удаление катекории '{$tag->name}' прошло успешно.");;
//    }
}
