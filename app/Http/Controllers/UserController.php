<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function registerUser(Request $request)
    {
        if (User::create($request->all())) {
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function loginUser(Request $request){
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('/');
        }
       return redirect('/login');
    }


}
