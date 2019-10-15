<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegistrationController extends Controller {

    public function index(){

        return view('/admin/reg_form');
    }

    public function create(){

        return view('/admin/reg_form');

    }


    public function store(Request $request){

        $validatedUser = $request->validate([
            'name' => 'required|unique:users,name|min:3|max:25',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:25|alpha_dash',
            'confirm_password'=> 'required|min:6|max:25|alpha_dash'

        ]);


        if ($validatedUser['password'] === $validatedUser['confirm_password']) {
            $user = new \App\User;
            $user->name = $validatedUser['name'];
            $user->email = $validatedUser['email'];
            $user->password = bcrypt($validatedUser['password']);
            $user->save();
            return redirect()->route('logins.member')->with('success', "Создание пльзователя '{$user->name}' прошло успешно.");
        }   return redirect()->route('registration.create')->with('success', "Создание пльзователя не получилось.");
        //dd($user);

    }

}
