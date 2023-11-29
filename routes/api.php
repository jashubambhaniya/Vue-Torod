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
		Route::get("logout", "logOut");
	});
    Route::middleware(["auth:sanctum","ability:customer"])->group(function () {
		Route::controller(CustomerController::class)->group(function () {
			Route::prefix("customer")->group(function () {
				Route::get("details", "details");
			});
		});
	});
});