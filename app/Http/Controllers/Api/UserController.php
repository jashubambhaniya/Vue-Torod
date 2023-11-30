<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Api\User\DetailsResource;

class UserController extends Controller
{
	/**
	 *  get user data
	 */
	public function details()
	{
		$user = Auth::user();
		return (new DetailsResource($user))->additional([
			"status" => true,
			"message" => __("api.user.data_fetch_succ")
		]);
	}

	/**
	 *  logs out user
	 */
	public function logOut()
	{
		$user = request()->user();
		$user->currentAccessToken()->delete();
		return response()->json([
			"status" =>  true,
			"message" => __("api.logged_out")
		]);
	}
}
