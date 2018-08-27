<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Auth;

class ReviewsController extends Controller
{
    public function create(Request $data) {
    	// Get data
    	$user_id = Auth::id();
    	$business_id = $data->business_id;
    	$title = $data->title;
    	$stars = $data->stars;
    	$description = $data->description;

    	// Check to see if review already left by user
    	$check = Review::where('user_id', $user_id)->where('business_id', $business_id)->count();
    	if ($check != 0) {
    		return "Duplicate error";
    	}

    	// Create Review object and insert
    	$review = new Review();
    	$review->user_id = $user_id;
    	$review->business_id = $business_id;
    	$review->title = $title;
    	$review->stars = $stars;
    	$review->description = $description;
    	$review->save();

    	// Return success message
    	return $review->id;
    }

    public function delete(Request $data) {
    	$review_id = $data->review_id;
    	$review = Review::where('id', $review_id)->first();
        $review->delete();
        return redirect()->back();
    }
}
