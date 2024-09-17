<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cloudinary;

class UserController extends Controller
{
    //
    public function mypage(User $user){
        return view('users.mypage')->with(['user' => $user]);
    }
}
