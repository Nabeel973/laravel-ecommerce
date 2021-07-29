<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    public function login(Request $request){

       $user = User::where('email',$request->email)->first();
       if(!$user || !Hash::check($request->password,$user->password)){
           return "Email or password is incorrect";
       }
       else{
           $request->session()->put('user',$user);
           return redirect()->route('product.index');
       }
    }
}
