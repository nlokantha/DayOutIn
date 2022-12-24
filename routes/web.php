<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PownerController;
use App\Http\Controllers\listingController;


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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/manageusers', function () { return view('admin.manage-users');})->name('manage-users');
});

//****only property owner can access this routes*****

Route::prefix('admin')->middleware(['auth','isOwner'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/manageusers', function () { return view('admin.manage-users');})->name('manage-users');
});
//****end of property owner's routes****

Route::get('/packages', function () {
    return view('pages.packages');
})->name('packages');


Route::get('/listing', function () {
    return view('pages.listing');
})->name('listing');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');

Route::get('/bookingform', function () {
    return view('pages.bookingform');
})->name('bookingform');

Route::get('/bookingform', function () {
    return view('pages.bookingform');
})->name('bookingform');

Route::get('/manageusers', function () {
    return view('admin.manage-users');
})->name('manage-users');