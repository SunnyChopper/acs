<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\Membership;
use App\Listing;
use Redirect;
use Hash;
use DateTime;
use Session;

class BusinessController extends Controller
{
	public function dashboard() {
		// Get session variables
		session_start();
		
		if (Session::has('logged_in')) {
			if (Session::get('logged_in') == true) {
				$business_id = Session::get('business_id');
			} else {
				return redirect(url('/business/login'));
			}
		} else {
			return redirect(url('/business/login'));
		}

		// Get the business and membership
		$business = Business::where('id', $business_id)->first();
		$membership = Membership::where('business_id', $business_id)->first();

		// Check if need to calculate trial period
		$trial_diff = -1;
		if($membership->trial == 1) {
			$timestamp = strtotime($membership->next_payment_date);
			$payday = new DateTime(date('Y-m-d', $timestamp));
			$today = new DateTime(date('Y-m-d'));
			$trial_diff = date_diff($today, $payday);
		}

		$page_header = $business->name;

		return view('business.dashboard')->with('page_header', $page_header)->with('business', $business)->with('membership', $membership)->with('trial_diff', $trial_diff);
	}

	public function login() {
		// Check to see if already logged in
		if (Session::has('logged_in')) {
			if (Session::get('logged_in') == true) {
				return redirect(url('/business/dashboard'));
			}
		} else {
			$page_header = "Login";
			return view('business.login')->with('page_header', $page_header);
		}
	}

	public function logout() {
		// Reset
		session()->forget('logged_in');
		session()->forget('business_id');
		Session::forget('logged_in');
		Session::forget('business_id');
		return redirect(url('/'));
	}

	public function login_business(Request $data) {
		$check = Business::where('username', urldecode($data->username))->count();
		if ($check > 0) {
			$password_check = Business::where('username', urldecode($data->username))->first();
			if (strcmp(Hash::make($data->password), $password_check->password)) {
				Session::put('logged_in', true);
				Session::put('business_id', $password_check->id);
				return redirect(url('/business/dashboard'));
			} else {
				return Redirect::back()->withErrors('Incorrect password');
			}
		} else {
			return Redirect::back()->withErrors('Username does not exist');
		}
	}

	public function update_business(Request $data) {
		// Pull up the business
		$business = Business::where('id', $data->business_id)->first();

		// Update the business if username not the same as another business
		$username_check = Business::where('username', $data->name)->get();
		$able_to_switch = true;
		foreach ($username_check as $user) {
			if ($user->id != $data->business_id) {
				$able_to_switch = false;
			}
		}

		// Update business details
		if ($able_to_switch) {
			$business->name = $data->name;
			$business->email = $data->email;
			$business->phone = $data->phone;
			$business->website = $data->website;
			$business->city = $data->city;
			$business->state = $data->state;
			$business->zipcode = $data->zipcode;
			$business->save();

			// Return back to dashboard
			return redirect(url('/business/dashboard'))->with('success', 'Profile updated');
		} else {
			return Redirect::back()->withInput()->withErrors('Username already taken');
		}
	}

	public function listings() {
		// Page data
		$page_header = "Listings";

		// Get all listings and paginate
		$listings = Listing::paginate(25);

		// Return view
		return view('business.listings')->with('page_header', $page_header)->with('listings', $listings);
	}
}
