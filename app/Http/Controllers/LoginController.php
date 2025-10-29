<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function handleLogin(LoginRequest $request){
        // $request->validate([
        //     'name' => ['required', 'alpha', 'min:6'],
        //     'email' => ['required', 'email'],
        //     'password' => 'required'
        // ],[
        //     'name.required' => 'The User name field is empty',
        //     'name.alpha' => 'User name have to contain only letters',
        //     'email' => 'The email isnt email',

        // ]);

        return $request;
    }
}
