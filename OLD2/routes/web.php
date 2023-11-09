<?php

use App\Http\Controllers\AdmitController;
use App\Http\Controllers\Api\V1\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\CalenderController;


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
Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('auth.login');
});

 
Route::get('/admindashboard', [DashboardController::class, 'index'])->name('admindashboard');
Route::get('/engineering', [DashboardController::class, 'engineering'])->name('engineering');
Route::get('/certificate', [DashboardController::class, 'certificate'])->name('certificate');
Route::get('/student/profile/{id}', [DashboardController::class, 'studentProfile'])->name('student.profile');

//expenses section
Route::get('/expenses', [ExpensesController::class, 'index']);
Route::get('/remcalender', [CalenderController::class, 'remcalender'])->name('calender');

Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/autoadmit', [AdmitController::class, 'autoadmit'])->name('autoadmit');