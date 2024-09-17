<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use Cloudinary;
use App\Models\Store;

class ReviewController extends Controller
{
    //
    public function tops(Review $review){
        return view('reviews.tops')->with(['reviews' => $review->getPaginateByLimit()]);
    }
    
    public function show(Review $review){
        return view('reviews.show')->with(['review' => $review]);
    }
    
    public function create(Store $store)
    {
        return view('reviews.create')->with(['stores' => $store->get()]);
    }
    
    public function store(ReviewRequest $request, Review $review)
    {
        $input = $request['review'];
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //dd($image_url);
        $input += ['photo_id' => $photo_id];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function edit(Review $review)
    {
        return view('reviews.edit')->with(['review' => $review]);
        
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $review->fill($input_review)->save();
        
        return redirect('/reviews/' . $review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
    
    
}
