<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Business;
use App\Review;
use Auth;

class SearchController extends Controller
{

    public function guest_search(Request $data) {
    	// Page data
    	$page_header = "Search Results";

        // Get base search parameters
        $origin_state = $data->origin_state;
	    $destination_state = $data->destination_state;

	    // Get search and lead parameters if given
        if(isset($data->name)) {
	        $name = $data->name;
	        $phone = $data->number;
	        $email = $data->email;
	        $vehicle_year = $data->vehicle_year;
	        $vehicle_make = $data->vehicle_make;
	        $vehicle_model = $data->vehicle_model;
	        $first_name = $this->split_name($name)[0];
	        $last_name = $this->split_name($name)[1];

	        // Save as a lead if email does not already exist
	        $email_check = Lead::where('email', $email)->count();
	        if ($email_check == 0) {
		        $lead = new Lead();
		        $lead->first_name = $first_name;
		        $lead->last_name = $last_name;
		        $lead->email = $email;
		        $lead->phone = $phone;
		        $lead->origin_state = $origin_state;
		        $lead->destination_state = $destination_state;
		        $lead->vehicle_year = $vehicle_year;
		        $lead->vehicle_make = $vehicle_make;
		        $lead->vehicle_model = $vehicle_model;
		        $lead->save();
		    }
		}

        // Make SQL statement
        $search_results = Business::where('state', $origin_state)->get();

        // Return view
        return view('pages.search')->with('page_header', $page_header)->with('search_results', $search_results)->with('origin_state', $origin_state)->with('destination_state', $destination_state);
    }

    public function members_search(Request $data) {
    	// Page data
    	$page_header = "Search Results";

    	// Get base search parameters
        $origin_state = $data->origin_state;
	    $destination_state = $data->destination_state;

	    // Pull data from Auth
	    $email = Auth::user()->email;
	    $first_name = Auth::user()->first_name;
	    $last_name = Auth::user()->last_name;

	    if(isset($data->vehicle_year)) {
	    	$vehicle_year = $data->vehicle_year;
	        $vehicle_make = $data->vehicle_make;
	        $vehicle_model = $data->vehicle_model;

	        // Save as a lead if email does not already exist
	        $email_check = Lead::where('email', $email)->count();
	        if ($email_check == 0) {
		        $lead = new Lead();
		        $lead->first_name = $first_name;
		        $lead->last_name = $last_name;
		        $lead->email = $email;
		        $lead->origin_state = $origin_state;
		        $lead->destination_state = $destination_state;
		        $lead->vehicle_year = $vehicle_year;
		        $lead->vehicle_make = $vehicle_make;
		        $lead->vehicle_model = $vehicle_model;
		        $lead->save();
		    }
	    }

	    // Make SQL statement
        $search_results = Business::where('state', $origin_state)->get();

        // Get reviews for each business
        $num_reviews = array();
        $avg_reviews = array();
        foreach($search_results as $search_result) {
        	// Get business id
        	$business_id = $search_result->id;

        	// Check to see if any reviews to even deal with
        	$check = Review::where('business_id', $business_id)->count();
        	if ($check != 0) {
	        	// Get number of reviews for business
	        	$total_biz_reviews = Review::where('business_id', $business_id)->count();
	        	$num_reviews[$business_id] = $total_biz_reviews;

	        	// Get reviews
	        	$reviews = Review::where('business_id', $business_id)->get();

	        	// Loop through reviews and calculate average
	        	$total = 0;
	        	foreach($reviews as $review) {
	        		// Get stars
	        		$stars = $review->stars;
	        		$total += $stars;
	        	}
	        	$average_review = $total / $total_biz_reviews;
	        	$avg_reviews[$business_id] = $average_review;
	        } else {
	        	$num_reviews[$business_id] = 0;
	        	$avg_reviews[$business_id] = 0;
	        }
        }

        // Return view
        return view('members.search')->with('page_header', $page_header)->with('search_results', $search_results)->with('origin_state', $origin_state)->with('destination_state', $destination_state)->with('num_reviews', $num_reviews)->with('avg_reviews', $avg_reviews);
    }
}
