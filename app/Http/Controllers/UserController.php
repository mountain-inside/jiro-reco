<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Soup;
use App\Models\Noodle;
use App\Models\Store;
use Cloudinary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function mypage()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('users.mypage')->with(['user' => $user]);
    }
    
    public function edit(Soup $soup ,Noodle $noodle,Store $store)
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('users.edit')->with(['user' => $user,'soups' => $soup->get(), 'noodles' => $noodle->get(),'stores' => $store->get()]);
    }
    
    public function update(UserRequest $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $input_user = $request['user'];
        $user->fill($input_user)->save();

        return redirect('/users/' . $user->id);
    }
}
