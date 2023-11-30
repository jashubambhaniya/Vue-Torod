<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\Api\User\DetailsResource;

class AuthController extends Controller
{

	/**
	 *  logs in user with mobile number
	 */
	public function login(LoginRequest $request)
	{
		$userDataArray = $request->safe()->all();
		$user = User::where("email", $userDataArray["email"])->first();
		if (!$user) {
			return response([
				"status" => false,
				"message" => __("api.errors.login_failed")
			]);
		} else if ($user->status == "0") {
			return response([
				"status" => false,
				"message" => __("api.user.inactive")
			]);
		} else if ($user->deleted_at != "") {
			return response([
				"status" => false,
				"message" => __("api.errors.removed_account_by_system")
			]);
		} else if (!Hash::check($request->password, $user->password)) {
			return response([
				"status" => false,
				"message" => __("api.errors.password_wrong")
			]);
		}
		$user->tokens()->delete();
		$token = $user->createToken($userDataArray["email"], ["user"])->plainTextToken;
		return (new DetailsResource($user))->additional([
			"status" => true,
			"bearer_token" => $token,
			"message" => __("api.user.logged_in")
		]);
	}
}
