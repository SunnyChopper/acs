<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/members/dashboard/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Generate random string for vertification
        $email_verification_token = $this->generateRandomString();

        // Send email
        $link = "https://www.allcarshippers.com/verify/" . $email_verification_token;
        $body = "Click on the link to verify your account: <a href='" . $link . "'>" . $link . "</a>";
        $email_data = array('name'=> $data["first_name"] . " " . $data["last_name"], "body" => $body, 'to_email' => $data["email"]);

        $to_email = $data["email"];
        Mail::send('emails.verify-email', $email_data, function($message) {
            $message->to("ishy.singh@gmail.com")->subject('Verify Your AllCarShippers Account');
            $message->from(env('MAIL_USERNAME'), "Sunny Singh");
        });
        
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data["last_name"],
            'email' => $data['email'],
            'email_verification_token' => $email_verification_token,
            'password' => Hash::make($data['password']),
        ]);
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
