<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ExpensesTypeController;
use App\Http\Controllers\BaseController;



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


//expenses type
 Route::get('/expenses-type', [ExpensesTypeController::class, 'index']);
Route::post('/expenses-type', [ExpensesTypeController::class, 'store'])->name('save_expenseType');





Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//base controller
Route::get('/prelims-registration', [BaseController::class, 'index'])->name('prelims-registration');