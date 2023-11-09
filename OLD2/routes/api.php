<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VerificationController;

use App\Http\Controllers\Api\V1\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});




Route::group([
    'prefix' => 'v1',
    'middleware' => 'api'], function ($router) {
    //Route::post('login-via-facebook', 'LoginController@loginViaFacebook');
    
   

    Route::group(['namespace' => 'Api\v1\Auth'], function () {
       /*  Route::post('login', [
            'as' => 'login', 'uses' => 'LoginController@login'
        ]); */
        Route::post('login-via-facebook', 'LoginController@loginViaFacebook');

       // Route::post('signup', 'RegisterController@register')->name('signup');

       Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
       Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');



        Route::post('signup', [RegisterController::class, 'register'])->name('user.register');
        Route::post('login', [RegisterController::class, 'login'])->name('user.login');
        Route::post('/refresh', [RegisterController::class, 'refresh']);

        Route::post('/verifytranx', [RegisterController::class, 'verifytranx']);

        Route::get('payments/getPayments', [RegisterController::class, 'getPayments']);

        Route::get('getPaystackKey', [RegisterController::class, 'getPaystackKey']);

        Route::post('/postadmission', [RegisterController::class, 'postadmission']);
        Route::post('upload', [RegisterController::class, 'upload']);



        Route::post('/getallstatus', [RegisterController::class, 'getallstatus']);
        Route::post('/getallprelim', [RegisterController::class, 'getallprelim']);
        
     




        Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
            
            Route::post('verify', 'RegisterController@verify')->name('verify');
            Route::post('resend-activation-email', 'RegisterController@resendActivationEmail');
        });

        Route::group(['middleware' => 'auth:api'], function () {
            Route::get('logout', 'LoginController@logout');
            Route::post('password/change', [
                'as' => 'change-password', 'uses' => 'ChangePasswordController@change'
            ]);
        });

        Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
            Route::post('forgot', 'ForgotPasswordController@sendResetLinkEmail')->name('forgot');
            Route::post('reset', 'ResetPasswordController@reset')->name('reset');
        });
    });
});