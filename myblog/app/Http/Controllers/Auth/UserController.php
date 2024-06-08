<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    public function getStore(StoreUserRequest $request){

         User::create($request->all());
         return redirect()->route('home');
         
     }

}
