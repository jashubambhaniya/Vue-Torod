<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;

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
Route::middleware(["localization"])->group(function () {
	Route::controller(AuthController::class)->group(function () {
		Route::post("register", "register");
		Route::post("login", "login");
	});
    Route::middleware(["auth:sanctum","ability:user"])->group(function () {
		Route::controller(UserController::class)->group(function () {
			Route::prefix("user")->group(function () {
				Route::get("details", "details");
				Route::get("logout", "logOut");
			});
		});
	});
});