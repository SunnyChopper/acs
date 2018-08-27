<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\Membership;
use Hash;
use Session;

class CheckoutController extends Controller
{
    public function index($package) {
    	// URL Decode
    	$package = urldecode($package);

    	// Page Header
    	$page_header = $package . " Package";

    	// Load up price
    	$price = 0.0;
    	switch ($package) {
			case 'Yearly':
				$price = 119.99;
				break;

			case 'Monthly':
				$price = 18.95;
				break;

			case '6 Months':
				$price = 89.99;
				break;
			
			default:
				# code...
				break;
		}

		// Return the view
		return view('checkout.index')->with('page_header', $page_header)->with('price', $price)->with('package', $package);
    }

    public function create_business($password, $customer_id, $package_id, $sub_id) {
    	if ($password != "acs2000") {
    		return redirect(url('/'));
    	} else {
    		$page_header = "Create Your Business Profile";

    		return view('checkout.create_business')->with('page_header', $page_header)->with('customer_id', $customer_id)->with('package_id', $package_id)->with('sub_id', $sub_id);
    	}	
    }

    public function enroll_business(Request $data) {
    	// Check to see if username already taken
    	$username_check = Business::where('username', $data->username)->count();
    	if ($username_check > 0) {
    		return redirect()->back()->with('error', 'Username is taken.');
    	}

    	// Get and save data
    	$business = new Business();
    	$business->customer_id = $data->customer_id;
    	$business->name = $data->name;
    	$business->email = $data->email;
    	$business->phone = $data->phone;
    	$business->username = $data->username;
    	$business->password = Hash::make($data->password);
    	$business->website = $data->website;
    	$business->city = $data->city;
    	$business->state = $data->origin_state;
    	$business->zipcode = $data->zipcode;
    	$business->insurance_expiration = $data->insurance_expiration_date;
    	$business->save();

    	// Start session and save variables
    	Session::put('logged_in', true);
        Session::put('business_id', $business->id);
        Session::save();

    	// Get next billing date
        $next_billing_date = date("Y-m-d", strtotime("+30 days"));

    	// Enter into membership
    	$membership = new Membership();
    	$membership->business_id = $business->id;
    	$membership->product_id = $data->package_id;
        $membership->sub_id = $data->sub_id;
    	$membership->trial = 1;
    	$membership->paid = 1;
    	$membership->next_payment_date = $next_billing_date;
    	$membership->deactivated = 0;
    	$membership->cancelled = 0;
    	$membership->save();

    	// Redirect to carrier dashboard
    	return redirect(url('/business/dashboard'));
    }

    public function stripe_webhook() {
    	// Be sure to replace this with your actual test API key
		// (Switch to the live key later)
		\Stripe\Stripe::setApiKey("sk_test_VPwmdeVpoFoba1cYleidhzGm");

		// retrieve the request's body and parse it as JSON
		$body = @file_get_contents('php://input');
		$json_response = response()->json($body);
		$json = json_decode($json_response->getData(), true);

		return var_dump($json);
    }

    public function create_charge(Request $data) {
    	// Be sure to replace this with your actual test API key
		// (Switch to the live key later)
		\Stripe\Stripe::setApiKey("sk_test_VPwmdeVpoFoba1cYleidhzGm");

		// Get the package
		$package = $_POST['package'];

		try {
			$customer = \Stripe\Customer::create(array(
				'email' => $_POST['email'],
				'source' => $_POST['stripeToken']
			));

			switch ($package) {
				case 'Monthly':
					$subscription = \Stripe\Subscription::create(array(
						'customer' => $customer->id,
						'plan' => 'plan_CwRuU4Eu813tSD',
						'trial_period_days' => 30
					));
					$sl = 1;
					break;

				case '6 Months':
					$subscription = \Stripe\Subscription::create(array(
						'customer' => $customer->id,
						'plan' => 'plan_CwS9hUgpd0Gbmk',
						'trial_period_days' => 30
					));
					$sl = 2;
					break;

				case 'Yearly':
					$subscription = \Stripe\Subscription::create(array(
						'customer' => $customer->id,
						'plan' => 'plan_CwS9xMoDvBAgB1',
						'trial_period_days' => 30
					));
					$sl = 3;
					break;
				
				default:
					break;
			}

			return redirect(url('checkout/create/register-business/acs2000/' . $customer->id . '/' . $sl . "/" . $subscription["id"]));
			exit;
		} catch(Exception $e) {
			echo("unable to sign up customer:" . $_POST['stripeEmail']. ", error:" . $e->getMessage());
		}
    }
}
