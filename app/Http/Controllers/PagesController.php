<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Business;
use App\Lead;

class PagesController extends Controller
{
    public function index() {
    	return view('pages.welcome');
    }

    public function faq() {
    	$page_header = "FAQ";

    	return view('pages.faq')->with('page_header', $page_header);
    }

    public function services() {
    	$page_header = "Services";

    	return view('pages.services')->with('page_header', $page_header);
    }

    public function direct() {
    	$page_header = "Why Direct?";

    	return view('pages.direct')->with('page_header', $page_header);
    }

    public function contact() {
    	$page_header = "Contact";

    	return view('pages.contact')->with('page_header', $page_header);
    }

    public function listings() {
    	$page_header = "Listings";

    	// Get listings data
    	$listings = Listing::paginate(10);

    	return view('pages.listings')->with('page_header', $page_header)->with('listings', $listings);
    }

    public function packages() {
        $page_header = "Packages";

        return view('pages.packages')->with('page_header', $page_header);
    }

    public function reviews() {
        $page_header = "Reviews";

        // Get all businesses
        $businesses = Business::orderBy('name', 'asc')->get();

        return view('pages.reviews')->with('page_header', $page_header)->with('businesses', $businesses);
    }
    
}
