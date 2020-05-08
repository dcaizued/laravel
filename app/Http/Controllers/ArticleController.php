<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function show()
    {
        $array = array("a" => "orange", "b" => "banana", "c" => "apple");
        return view('article', ['fruits' => $array]);
    }

    public function show_app()
    {
        return view('app');
    }

    public function showForm()
    {
        return view('form');
    }
    public function login(Request $request)
    {
        $login="admin";
        $password = "123";
        if($request->email === "$login" && $request->password === $password){
            session(['user' => $login]);
            return redirect('app');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('login_form');
    }
}
