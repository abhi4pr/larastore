<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
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

Route::get('/about-us', function () {
	return view('about-us');
});
Route::get('/contact-us', function () {
	return view('contact-us');
});
Route::get('/blogs', function () {
	return view('blogs');
});
Route::get('/single-blog', function () {
	return view('single-blog');
});
Route::get('/login', function () {
	return view('login');
});
Route::get('/register', function () {
	return view('register');
});
Route::get('/forgetpass', function () {
	return view('forgetpass');
}); 
Route::get('/admin/login', function () {
	return view('admin/login');
});

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@index');

Route::post('/register/submit', 'App\Http\Controllers\CustomerController@Register');
Route::post('/login/submit', 'App\Http\Controllers\CustomerController@Login');
Route::post('/verify_email', function () { return view('verify_email'); });
Route::post('/verify/email/submit', 'App\Http\Controllers\CustomerController@VerifyEmail');
Route::get('/logout', 'App\Http\Controllers\CustomerController@Logout');
Route::post('/forgetpass/submit', 'App\Http\Controllers\CustomerController@Forgetpass');
Route::post('/searchresult', 'App\Http\Controllers\WebController@Search');

Route::group(['middleware'=>['prevent_back_history','user_auth']], function(){
    Route::get('/my-account', 'App\Http\Controllers\CustomerController@ProfileEd');
    //Route::get('/my-account', 'App\Http\Controllers\CustomerController@GetOrders');
    Route::post('/userpro/update', 'App\Http\Controllers\CustomerController@ProfileUp');
    Route::get('/cart', 'App\Http\Controllers\WebController@GetCartItems');
    Route::post('/update_cart_item', 'App\Http\Controllers\WebController@UpdateCartItems');
    Route::get('/remove_single_cart/{id}','App\Http\Controllers\WebController@RemoveScart');
    Route::get('/cart_item_count','App\Http\Controllers\WebController@Countcart');
    Route::get('/checkout','App\Http\Controllers\WebController@CheckOut');
    Route::post('/checkout/submit', 'App\Http\Controllers\WebController@ConfirmOrder');
    Route::get('/order_detail/{id}', 'App\Http\Controllers\CustomerController@DetailoOrder');
    Route::get('/invoice/{id}', 'App\Http\Controllers\CustomerController@DownloadInvoice');
});

Route::post('/admin/login/submit', 'App\Http\Controllers\AdminController@index');
Route::get('/admin/logout', 'App\Http\Controllers\AdminController@Logout');

Route::group(['middleware'=>['prevent_back_history','admin_auth']], function(){
	Route::get('/admin/profile/', 'App\Http\Controllers\AdminController@ProfileAEd');
	Route::post('/admin/profile/submit', 'App\Http\Controllers\AdminController@ProfileAUp');
	Route::get('/admin/customers', 'App\Http\Controllers\AdminController@Customers');
	Route::get('/admin/contacts', 'App\Http\Controllers\AdminController@Contacts');
	Route::post('/admin/carticles/submit', 'App\Http\Controllers\AdminController@Carticles');
	Route::get('/admin/allarticles', 'App\Http\Controllers\AdminController@Allarticles');
	Route::get('/admin/home', function () { return view('admin/index'); });
    Route::get('/admin/createarticle', function() { return view('admin/createarticle'); });
    Route::get('/admin/createproduct', 'App\Http\Controllers\AdminController@SendCatProduct');
	Route::post('/admin/cproduct/submit', 'App\Http\Controllers\AdminController@AddProduct');
	Route::get('/admin/allproducts', 'App\Http\Controllers\AdminController@Allproducts');
	Route::get('/admin/createcategory', function() { return view('admin/createcategory'); });
	Route::post('/admin/ccategory/submit', 'App\Http\Controllers\AdminController@AddCategory');
	Route::get('/admin/allcategories', 'App\Http\Controllers\AdminController@Allcategory');
	Route::get('/admin/allorders', 'App\Http\Controllers\AdminController@Allorders');
});

Route::get('/blogs', 'App\Http\Controllers\WebController@LoadAllBlogs');
Route::get('/single-blog/{id}', 'App\Http\Controllers\WebController@LoadSingleBlog');
Route::get('/shop', 'App\Http\Controllers\WebController@LoadAllProducts');
Route::get('/single-product/{id}', 'App\Http\Controllers\WebController@LoadSingleProduct');
Route::post('/addToCart/submit', 'App\Http\Controllers\WebController@Addtocart');
Route::post('/review/submit', 'App\Http\Controllers\WebController@SaveReview');
Route::get('/', 'App\Http\Controllers\WebController@HomeProBlog');
Route::get('/category/cname/{data}', 'App\Http\Controllers\WebController@ProToCat');
Route::get('/getcategories','App\Http\Controllers\WebController@CateMenu');