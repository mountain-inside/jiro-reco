<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Soup;
use App\Models\Noodle;
use App\Models\Store;
use App\Models\Stamp;
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
    
    public function stamp(Store $store)
    {
        $userid = Auth::id();
        $user = User::find($userid);
        $stamp = Stamp::where('user_id', $userid)->orderBy('store_id', 'ASC')->get();
        return view('users.stamp')->with(['user' => $user, 'stores' => $store->get(), 'stamps' => $stamp]);
    }
    
    public function register(Request $request, Store $store)
    {
        $userid = Auth::id();
        $user = User::find($userid);
        $input = $request->input('visit_store');
        
        $visit = Stamp::firstOrNew([
            'user_id' => $userid,
            'store_id' => $input,
        ]);
        
        $visit->stamp_count += 1;
        $visit->save();
        
        $stamp = Stamp::where('user_id', $userid)->orderBy('store_id', 'ASC')->get();
        return redirect('/stamp');
        
    }
}
