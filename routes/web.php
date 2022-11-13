<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\DonationRequestController;

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
Route::get('/donations/view/{donation:slug}', [HomeController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::view('/email/verify', 'auth.verify-email')->name('verification.notice')->middleware('auth');
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [RegisterController::class, 'resendEmailVerification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::view('/pending', 'user.status.pending');

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/settings', 'settings')->name('settings');
        Route::get('/notifications', 'notifications')->name('notfications');
    });

    Route::get('/askfordonation', [DonationController::class, 'create']);
    Route::post('/askfordonation', [DonationController::class, 'store']);
    Route::get('/donations/{donation:slug}', [DonationController::class, 'show']);
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/edituser', [UserController::class, 'edit'])->name('edit-user');

    Route::get('/donation-requests', [DonationRequestController::class, 'index']);
});
