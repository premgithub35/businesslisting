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
Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog-details', 'HomeController@blogdetails');
// Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/faq','HomeController@getfaq')->name('faq');
Route::get('/about','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('autocomplete', 'HomeController@autocomplete')->name('autocomplete');
Route::get('/review','HomeController@review')->name('review');
// Route::get('/website-design&development', 'ServicesController@development')->name('website-design-development');
Route::post('/comment', 'HomeController@comment')->name('comment');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/career', 'HomeController@career')->name('career');
Route::get('/categoriesdetails', 'HomeController@categoriesdetails')->name('categoriesdetails');

Route::get('/categories', 'HomeController@categories')->name('categories');
Route::get('/categories-details/{id}', 'HomeController@categoriesdtl')->name('catdetails');
Route::get('/categories-listings-single/{id}', 'HomeController@listingsingle')->name('listing-single');
Route::get('/form-submit','HomeController@formSubmit')->name('form-submit');
Route::get('/aad-business-signup', 'HomeController@add')->name('aad-business-signup');
Route::post('/aad-business/store', 'HomeController@store')->name('business-store');



Route::get('/website-design&development', 'ServicesController@development')->name('website-design-development');
Route::post('/website-design-development', 'ServicesController@dev')->name('website-development');
Route::get('/google-ads', 'ServicesController@googleads')->name('google-ads');
Route::post('/google-ad', 'ServicesController@googlead')->name('google-ad');
Route::get('/social-media-marketing', 'ServicesController@socialmediamarketing')->name('social-media-marketing');
Route::post('/social-media-market', 'ServicesController@socialmedia')->name('social-media-market');
Route::get('/seo&content-writing', 'ServicesController@seocontentwriting')->name('seo-content-writing');
Route::post('/content-writing', 'ServicesController@contentwriting')->name('content-writing');
Route::get('/search-engine-optimization', 'ServicesController@searchengineoptimization')->name('search-engine-optimization');
Route::post('/search-engine', 'ServicesController@searchengine')->name('search-engine');


// Item Menu
Route::get('admin/imenu','ImenusController@index')->name('imenu');
Route::get('admin/imenus/add', 'ImenusController@add')->name('imenus-add');
Route::post('admin/imenus/store', 'ImenusController@store')->name('imenus-store');
Route::get('admin/edit-imenu/{id}','ImenusController@edit')->name('edit-imenu');
Route::get('admin/success-imenu/{id}','ImenusController@active')->name('active-imenu');
Route::get('admin/delete-imenu/{id}','ImenusController@inactive')->name('inactive-imenu');

// Item Menu
Route::get('admin/categories','CategoriesController@index')->name('categories');
Route::get('admin/add-categories','CategoriesController@create')->name('add-categories');
Route::post('admin/create-update-categories/{id?}','CategoriesController@createOrUpdate')->name('create-update-categories');
Route::get('admin/edit-categories/{id}','CategoriesController@edit')->name('edit-categories');
Route::get('admin/active-categories/{id}','CategoriesController@active')->name('active-categories');
Route::get('admin/inactive-categories/{id}','CategoriesController@inactive')->name('inactive-categories');  

//Reviews
Route::get('admin/reviews', 'ReviewsController@index')->name('reviews');
Route::get('admin/reviews/view/{id}', 'ReviewsController@view')->name('review-view');
Route::get('admin/active-reviews/{id}','ReviewsController@active')->name('active-review');
Route::get('admin/inactive-reviews/{id}','ReviewsController@inactive')->name('inactive-review');  




Route::get('admin/login', 'LoginController@index')->name('login');
Route::post('admin/authenticate','LoginController@authenticate')->name('authenticate');
Route::get('admin/logout','LoginController@logout')->name('logout');


Route::group(['middleware' => ['adminLogin:web']], function () {
Route::get('admin/dashboard','DashboardController@index')->name('dashboard');

// User Section
Route::get('admin/user','RegisterController@getUsers')->name('users');
Route::get('admin/add-user','RegisterController@create')->name('add-user');
Route::post('admin/create-user', 'RegisterController@register')->name('create-user');
Route::get('admin/edit-user/{id}','RegisterController@edit')->name('edit-user');
Route::post('admin/update-user/{id}','RegisterController@update')->name('update-user');
Route::get('admin/active-user/{id}','RegisterController@active')->name('active-user');
Route::get('admin/inactive-user/{id}','RegisterController@inactive')->name('inactive-user');  

//Enquiry
Route::get('admin/message','EnquiryController@index')->name('message');
Route::get('admin/success-message/{id}','ImenusController@active')->name('active-message');
Route::get('admin/delete-message/{id}','ImenusController@inactive')->name('inactive-message');


//testimonial section
Route::get('admin/listing','TestimonialController@index')->name('listing');
Route::get('admin/add-listing','TestimonialController@create')->name('add-listing');
Route::post('admin/create-update-listing/{id?}','TestimonialController@createOrUpdate')->name('create-update-listing');
Route::get('admin/edit-listing/{id}','TestimonialController@edit')->name('edit-listing');
Route::get('admin/active-listing/{id}','TestimonialController@active')->name('active-listing');
Route::get('admin/inactive-listing/{id}','TestimonialController@inactive')->name('inactive-listing');


// Page Section 
Route::get('admin/pages','PagesController@index')->name('pages');
Route::get('admin/add-page','PagesController@create')->name('add-page');
Route::post('admin/create-update-page/{id?}','PagesController@createOrUpdate')->name('create-update-page');
Route::get('admin/edit-page/{id}','PagesController@edit')->name('edit-page');
Route::get('admin/active-page/{id}','PagesController@active')->name('active-page');
Route::get('admin/inactive-page/{id}','PagesController@inactive')->name('inactive-page');

// faq section
Route::get('admin/faq','FaqController@index')->name('faq');
Route::get('admin/add-faq','FaqController@create')->name('add-faq');
Route::post('admin/create-update-faq/{id?}','FaqController@createOrUpdate')->name('create-update-faq');
Route::get('admin/edit-faq/{id}','FaqController@edit')->name('edit-faq');
Route::get('admin/success-faq/{id}','FaqController@active')->name('active-faq');
Route::get('admin/delete-faq/{id}','FaqController@inactive')->name('inactive-faq');

// career section
Route::get('admin/careers','CareersController@index')->name('careers');
Route::get('admin/add-career','CareersController@create')->name('add-career');
Route::post('admin/create-update-career/{id?}','CareersController@createOrUpdate')->name('create-update-career');
Route::get('admin/edit-career/{id}','CareersController@edit')->name('edit-career');
Route::get('admin/active-career/{id}','CareersController@active')->name('active-career');
Route::get('admin/inactive-career/{id}','CareersController@inactive')->name('inactive-career');  


});    


// Route::get('/facebook.com/portfolio/', function () {
//     return view('frontend.facebook');
// });
