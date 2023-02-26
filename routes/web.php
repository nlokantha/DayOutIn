<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PownerController;
use App\Http\Controllers\listingController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserDashboardController;

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
Route::get('/owner-list', [PownerController::class, 'indexOwner'])->name('indexOwner');
Route::get('/register-owner', [PownerController::class, 'createOwner'])->name('createOwner');
Route::post('/store-owner', [PownerController::class, 'storeOwner'])->name('storeOwner');
Route::get('/show-owner/{powner}', [PownerController::class, 'showOwner'])->name('showOwner');
Route::get('/edit-owner/{powner}', [PownerController::class, 'editOwner'])->name('editOwner');
Route::put('/edit-owner/{powner}', [PownerController::class, 'updateOwner'])->name('updateOwner');
Route::delete('/owner-list{powner}', [PownerController::class, 'destroyOwner'])->name('destroyOwner');
Route::get('/approveowner{id}', [PownerController::class, 'owneraprovaldone'])->name('owneraprovaldone');
Route::get('/notapproveowner{id}', [PownerController::class, 'owneraprovalcancel'])->name('owneraprovalcancel');

Route::get('/customer-list', [CustomerController::class, 'indexCustomer'])->name('indexCustomer');
Route::get('/register-customer', [CustomerController::class, 'createCustomer'])->name('createCustomer');
Route::post('/store-customer', [CustomerController::class, 'storeCustomer'])->name('storeCustomer');
Route::get('/show-customer/{customer}', [CustomerController::class, 'showCustomer'])->name('showCustomer');
Route::get('/edit-customer/{customer}', [CustomerController::class, 'editCustomer'])->name('editCustomer');
Route::put('/edit-customer/{customer}', [CustomerController::class, 'updateCustomer'])->name('updateCustomer');
Route::delete('/customer-list{customer}', [CustomerController::class, 'destroyCustomer'])->name('destroyCustomer');
Route::get('/approve{id}', [CustomerController::class, 'aprovaldone'])->name('aprovaldone');
Route::get('/notapprove{id}', [CustomerController::class, 'aprovalcancel'])->name('aprovalcancel');

Route::get('/contact', [ContactController::class, 'createContact'])->name('createContact');
Route::get('/contact-list', [ContactController::class, 'indexContact'])->name('indexContact');
Route::get('/show-contact/{contact}', [ContactController::class, 'showContact'])->name('showContact');
Route::post('/store-contact', [ContactController::class, 'storeContact'])->name('storeContact');

//Password reset Routes
Route::get('/resetLink', function () { return view('auth.passwords.resetLinkSend');})->name('restlink');
Route::post('/passwordReset', [ForgotPasswordController::class, 'password_reset'])->name('password.linkreset');
Route::get('/password/resets/{remember_token}', [ForgotPasswordController::class, 'Show_reset_form'])->name('password.showForm');
Route::post('/password/changepassword', [ForgotPasswordController::class, 'Change_password'])->name('password.changepw');

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/manageusers', function () { return view('admin.manage-users');})->name('manage-users');
});

// Route::prefix('auth')->middleware(['auth'])->group(function(){
//     Route::post('/bookingform', [BookingController::class, 'index'])->name('booking1');

//     //order route

// });

Route::group(['middleware' => ['auth']], function() {

    //Route for details of packages

Route::get('/package_details/{id}', [BookingController::class, 'BookingView']);
});

Route::Post('/order/{id}', [OrdersController::class,'CreateOrder'])->name('orderstore');

//****only property owner can access this routes*****

Route::prefix('Owner')->middleware(['auth','isOwner'])->group(function(){
    Route::resource('package', PackageController::class , ['names' => ['index' => 'package', 'store' => 'package.store']]);
});
//****end of property owner's routes****


Route::resource('/packages', PackageController::class , ['names' => ['index' => 'packages']]);


Route::get('/listing', function () {
    return view('pages.listing');
})->name('listing');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');


Route::get('/CustomerDashboard', function () {
    return view('pages.customerDashboard');
})->name('CustomerDashboard');



//Reviews

Route::get('/review', [ReviewsController::class, 'createReview'])->name('createReview');
Route::get('/', [ReviewsController::class, 'indexReview'])->name('indexReview');
Route::post('/store-review', [ReviewsController::class, 'storeReview'])->name('storeReview');

Route::get('/PownerDashboard', [UserDashboardController::class, 'PownerListings'])->name('PownerDashboard');

Route::get('/CustomerDashboard', [UserDashboardController::class, 'CustomerOrders'])->name('CustomerDashboard');

Route::post('/Paid', [UserDashboardController::class, 'forCustomerDashboard'])->name('forCustomerDashboard');

//for invoice

Route::get('/invoice', function () {
    return view('pages.invoice');
});

