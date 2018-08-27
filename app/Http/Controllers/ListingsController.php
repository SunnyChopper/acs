<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use Auth;

class ListingsController extends Controller
{
    public function index() {	

    }

    public function create(Request $data) {
    	// Get the data
    	$first_name = $data->first_name;
    	$last_name = $data->last_name;
    	$email = $data->email;
    	$phone = $data->phone;
        $date_of_shipping = $data->date_of_shipping;
        $origin_city = $data->origin_city;
    	$origin_state = $data->origin_state;
        $destination_city = $data->destination_city;
    	$destination_state = $data->destination_state;
        $vehicle_year = $data->vehicle_year;
        $vehicle_make = $data->vehicle_make;
        $vehicle_model = $data->vehicle_model;
        $note = $data->note;

    	// Insert into database
    	$listing = new Listing();
        $listing->user_id = Auth::id();
    	$listing->first_name = $first_name;
    	$listing->last_name = $last_name;
    	$listing->email = $email;
    	$listing->phone = $phone;
        $listing->date_of_shipping = $date_of_shipping;
        $listing->origin_city = $origin_city;
    	$listing->origin_state = $origin_state;
        $listing->destination_city = $destination_city;
    	$listing->destination_state = $destination_state;
        $listing->vehicle_year = $vehicle_year;
        $listing->vehicle_make = $vehicle_make;
        $listing->vehicle_model = $vehicle_model;
        $listing->note = $note;
    	$listing->save();

    	return redirect()->back();
    }

    public function edit(Request $data) {
        // Get the data
        $id = $data->listing_id;
        $first_name = $data->first_name;
        $last_name = $data->last_name;
        $email = $data->email;
        $phone = $data->phone;
        $date_of_shipping = $data->date_of_shipping;
        $origin_city = $data->origin_city;
        $origin_state = $data->origin_state;
        $destination_city = $data->destination_city;
        $destination_state = $data->destination_state;
        $vehicle_year = $data->vehicle_year;
        $vehicle_make = $data->vehicle_make;
        $vehicle_model = $data->vehicle_model;
        $note = $data->note;

        // Retrieve the listing
        $listing = Listing::where('id', $id)->first();
        $listing->first_name = $first_name;
        $listing->last_name = $last_name;
        $listing->email = $email;
        $listing->phone = $phone;
        $listing->date_of_shipping = $date_of_shipping;
        $listing->origin_city = $origin_city;
        $listing->origin_state = $origin_state;
        $listing->destination_city = $destination_city;
        $listing->destination_state = $destination_state;
        $listing->vehicle_year = $vehicle_year;
        $listing->vehicle_make = $vehicle_make;
        $listing->vehicle_model = $vehicle_model;
        $listing->note = $note;
        $listing->save();

        return redirect(url('/members/dashboard/'));
    }

    public function delete(Request $data) {
        // Get the data
        $listing_id = $data->delete_listing_id;
        $listing = Listing::where('id', $listing_id)->first();
        $listing->delete();
        return redirect()->back();
    }
}
