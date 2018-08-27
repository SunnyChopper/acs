<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Webpages
Route::get('/', 'PagesController@index')->name('Homepage of website');
Route::get('/faq', 'PagesController@faq')->name('FAQ Page');
Route::get('/services', 'PagesController@services')->name('Services page');
Route::get('/direct', 'PagesController@direct')->name('Why direct page');
Route::get('/reviews', 'PagesController@reviews')->name('Reviews page');
Route::get('/listings', 'PagesController@listings')->name('Listings page');
Route::get('/contact', 'PagesController@contact')->name('Contact page');
Route::get('/packages', 'PagesController@packages')->name('Packages page');

// Search functionality
Route::post('/guest/search', 'SearchController@guest_search')->name('Search results for guests');
Route::post('/members/search', 'SearchController@members_search')->name('Search results for members');

// Reviews
Route::post('/reviews/create', 'ReviewsController@create')->name('Creating a review');
Route::post('/reviews/delete', 'ReviewsController@delete')->name('Deleting a review');

// Listings
Route::post('/listings/create', 'ListingsController@create')->name('Create a listing');
Route::post('/edit/listing', 'ListingsController@edit')->name('Update a listing');
Route::post('/delete/listing', 'ListingsController@delete')->name('Delete a listing');

// Checkout
Route::get('/checkout/{package_id}', 'CheckoutController@index')->name('Checkout page for companies');
Route::post('/checkout/stripe/update', 'CheckoutController@stripe_webhook')->name('Webhooks for Stripe');
Route::get('/checkout/create/register-business/{password}/{customer_id}/{package_id}/{sub_id}', 'CheckoutController@create_business')->name('Page to create new business');
Route::post('/checkout/charge', 'CheckoutController@create_charge')->name('Checkout function');
Route::post('/checkout/register/business/', 'CheckoutController@enroll_business')->name('Creating a business function');

// Members Backend
Route::get('/members/login/', 'MembersController@login')->name('Login page for customers');
Route::get('/members/register/', 'MembersController@register')->name('Register page for customers');
Route::get('/members/dashboard/', 'MembersController@dashboard')->name('Dashboard page of members');
Route::get('/members/listings/edit/{id}', 'MembersController@edit_listing')->name('Edit a listing');
Route::get('/members/logout/', 'MembersController@logout')->name('Logout action for customers');
Route::get('/members/reviews/', 'MembersController@reviews')->name('Review section for customers');
Route::get('/members/reviews/new', 'MembersController@new_review')->name('Create a new review');
Route::get('/members/not-verified', 'MembersController@not_verified')->name('Not verified account');
Route::get('/verify/{email_verification_token}', 'MembersController@verify')->name('Verification action');

// Business Backend
Route::get('/business/login', 'BusinessController@login')->name('Login page for businesses');
Route::get('/business/dashboard', 'BusinessController@dashboard')->name('Dashboard of businessess');
Route::post('/business/login/verify', 'BusinessController@login_business')->name('Function to login a business');
Route::post('/business/update/profile', 'BusinessController@update_business')->name('Function to update a business');
Route::get('/business/logout', 'BusinessController@logout')->name('Function to logout');
Route::geT('/business/listings', 'BusinessController@listings')->name('Listings for businesses');
Auth::routes();
