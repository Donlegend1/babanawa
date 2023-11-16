<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ExpensesTypeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\BasicInformations;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Artisan;




use Illuminate\Support\Facades\Session;


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
Route::get('/clear', function() {
Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
return "Cleared!";
});


 
Route::get('/admindashboard', [DashboardController::class, 'index'])->name('admindashboard');
Route::get('/engineering', [DashboardController::class, 'engineering'])->name('engineering');
Route::get('/certificate', [DashboardController::class, 'certificate'])->name('certificate');
Route::get('/student/profile/{id}', [DashboardController::class, 'studentProfile'])->name('student.profile');

//users section
Route::get('/users', [UserController::class, 'index']);
Route::get('/new-user', [UserController::class, 'create']);
Route::post('/save-user', [UserController::class, 'store']);
Route::post('/delete-user', [UserController::class, 'destroy'])->name('delete_user');
Route::get('/user/{id}', [UserController::class, 'edit']);
Route::post('/update-user/{id}', [UserController::class, 'update']);









//expenses section
Route::get('/expenses', [ExpensesController::class, 'index']);
Route::post('/expenses', [ExpensesController::class, 'store'])->name('save_expense');
Route::post('/expenses-edit', [ExpensesController::class, 'update'])->name('edit_expense');
Route::post('/expenses-delete', [ExpensesController::class, 'destroy'])->name('delete_expense');
Route::get('/expenses/filter', [ExpensesController::class, 'filter']);
Route::get('/graph/filter', [DashboardController::class, 'fetchData']);



//incomes
Route::get('/incomes', [PaymentController::class, 'index']);




//expenses type
Route::get('/expenses-type', [ExpensesTypeController::class, 'index']);
Route::post('/expenses-type', [ExpensesTypeController::class, 'store'])->name('save_expenseType');
Route::post('/edit-expenses-type', [ExpensesTypeController::class, 'update'])->name('edit_expenseType');
Route::post('/delete-expenses-type', [ExpensesTypeController::class, 'destroy'])->name('delete_expense_type');
Route::get('/complete', [ExpensesTypeController::class, 'complete'])->name('complete');


 //messages
Route::get('/new-messages', [MessageController::class, 'create']);
Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages-sent', [MessageController::class, 'sent']);
Route::post('/messages-save', [MessageController::class, 'store'])->name("save-message");
Route::get('/message/{id}', [MessageController::class, 'show']);
Route::get('/message-inbox/{id}', [MessageController::class, 'inbox']);

Route::post('/approve-message', [MessageController::class, 'approve']);
Route::post('/decline-message', [MessageController::class, 'declineRecipient'])->name('declineRecipient');
Route::post('/delegate-message', [MessageController::class, 'delegate'])->name('delegate');













 //logout
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//base controller
Route::get('/prelims-registration/{stream}/{type}', [BaseController::class, 'index'])->name('prelims-registration');
Route::get('/verifytranx/{reference}', [BasicInformations::class, 'verifytranx']);
Route::get('/get-email-from-session', [BasicInformations::class, 'getEmailFromSession']);


 Route::get('/complete', [BaseController::class, 'complete'])->name('complete');

Route::post('/store-payment-reference', function (\Illuminate\Http\Request $request) {
    $reference = $request->input('reference');

    // Store the payment reference in the session
    Session::put('paymentReference', $reference);

    return response()->json(['success' => true]);
});