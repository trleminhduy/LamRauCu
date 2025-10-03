<?php

use App\Http\Controllers\Clients\AccountController;
use App\Http\Controllers\Clients\AuthController;
use App\Http\Controllers\Clients\ForgotPasswordController;
use App\Http\Controllers\Clients\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('clients.pages.about');
});

Route::get('/service', function () {
    return view('clients.pages.service');
});

Route::get('/team', function () {
    return view('clients.pages.team');
});

Route::get('/faq', function () {
    return view('clients.pages.faq');
});

Route::get('/register', [AuthController::class,'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('post-register');

//Routue kích hoạt tài khoản
Route::get('/activate/{token}', [AuthController::class,'activate'])->name('activate');

Route::get('/login', [AuthController::class,'showloginForm'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('post-login');




//Forgot password
Route::get('/forgot-password', [ForgotPasswordController::class,'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class,'sendResetLink'])->name('password.email');


//Reset it
//reset phải có token mới biết được user nào cần reset
Route::get('/reset-password/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class,'resetPassword'])->name('password.update');


//Custom middleware
Route::middleware(['auth.custom'])->group(function(){
    //middleware check người dùng nếu chưa đăng nhập thì sẽ không đi luồng đăng xuất thành công 
    //vì nó không hợp lý thay vào đó sẽ bắt người dùng đăng nhập mới thực hiện chức năng
    Route::get('/logout', [AuthController::class,'logout'])->name('logout'); 

    //update account,.....
    Route::prefix('account')->group(function(){
        Route::get('/',[AccountController::class,'index'])->name('account');
        Route::post('/account/update', [AccountController::class, 'update'])->name('account.update');

    });
    
});
