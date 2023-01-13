<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistDashboardController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\BandProfileController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SignoutController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/signup', SignupController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/paymentmethod', PaymentMethodController::class);
Route::resource('/login', LoginController::class);
Route::resource('/bandprofile', BandProfileController::class);
Route::resource('/addservices', ServicesController::class);
Route::resource('/artistdash', ArtistDashboardController::class);
Route::get("/logout", [SignoutController::class, 'index']);
Route::resource("/bookings", BookingsController::class);
Route::resource("/admin", AdminController::class);
Route::resource("/artists", ArtistsController::class);
Route::resource("/events", EventsController::class);
Route::resource("/hostdash",HostController::class);
