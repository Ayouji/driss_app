<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('admin', function () {
    return view('admin.auth.login');
});

Route::get('admin', [AuthController::class,'login_admin']);
Route::get('admin', [AuthController::class,'auth_login_admin']);



Route::get('/', function () {
    return view('welcome');

});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});


