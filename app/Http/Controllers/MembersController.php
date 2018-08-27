<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Review;
use App\Business;
use Auth;

class MembersController extends Controller
{
    public function login() {
    	$page_header = "Members Login";

    	return view('members.login')->with('page_header', $page_header);
    }

    public function logout() {
        Auth::logout();
        return redirect(url('/'));
    }

    public function register() {
    	$page_header = "Members Register";

    	return view('members.register')->with('page_header', $page_header);
    }

    public function dashboard() {
    	$page_header = "Dashboard";

    	// Get listings by person
    	$user_id = Auth::id();
    	$listings = Listing::where('user_id', $user_id)->get();

    	return view('members.dashboard')->with('page_header', $page_header)->with('listings', $listings);
    }

    public function edit_listing($id) {
    	$page_header = "Edit Listing";

    	// Get listing
    	$listing = Listing::where('id', $id)->first();

    	return view('members.edit-listing')->with('page_header', $page_header)->with('listing', $listing);
    }

    public function reviews() {
        // Page data
        $page_header = "Reviews";

        // Get reviews for user
        $user_id = Auth::id();
        $reviews = Review::where('user_id', $user_id)->get();
        if (count($reviews) != 0) {
            $review_array = array();
            foreach($reviews as $review) {
                // Get business name
                $business_id = $review->business_id;
                $business = Business::where('id', $business_id)->first();
                $business_name = $business->name;

                array_push($review_array, array($business_name, $review));
            }
        } else {
            $review_array = array();
        }

        return view('members.reviews')->with('page_header', $page_header)->with('review_array', $review_array);
    }
}
