<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    function regist(){
        return view('register');
    }

    function create(Request $req){

        $validate = $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $validate['password'] = bcrypt($req->password);

        User::create($validate);

        return redirect('login');
    }

    function auth(Request $req){
        $credentials = $req->only('email','password');

        if (Auth::attempt($credentials)) {
            return redirect('admin');
        }
        return redirect()->back();
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

}
