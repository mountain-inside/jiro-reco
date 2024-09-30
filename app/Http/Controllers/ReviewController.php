<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Cloudinary;
use App\Models\Store;
use App\models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function tops(Review $review){
        $id = Auth::id();
        $user = User::find($id);
        return view('reviews.tops')->with(['reviews' => $review->getPaginateByLimit(), 'user' => $user]);
    }
    
    public function show(Review $review){
        $id = Auth::id();
        $user = User::find($id);
        return view('reviews.show')->with(['review' => $review, 'user' => $user]);
    }
    
    public function create(Store $store)
    {
        return view('reviews.create')->with(['stores' => $store->get()]);
    }
    
    public function store(ReviewRequest $request, Review $review)
    {
        //dump($request);
        //dd($review);
        $user_id = Auth::id();
        $input = $request['review'];
        //dump($input);
        $store = Store::where('id', $input['store_id'])->first();
        //dd($store);
        $store->rating_total += $input['rating'];
        $store->rating_count += 1;
        $store->save();
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $photo_id = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input += ['photo_id' => $photo_id];
        $input += ['user_id' => $user_id];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function edit(Review $review, Store $store)
    {
        return view('reviews.edit')->with(['review' => $review, 'stores' => $store->get()]);
        
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $photo_id = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input_review += ['photo_id' => $photo_id];
        $review->fill($input_review)->save();
        
        
        return redirect('/reviews/' . $review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
    
    
}
