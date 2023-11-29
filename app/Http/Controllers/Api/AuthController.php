<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

	/**
	 *  logs in customer with mobile number
	 */
	public function login(Request $request)
	{
		$customerArray = $request;
		$customer = User::where("email", $customerArray["email"])->withTrashed()->first();
		if (!$customer) {
			return response([
				"status" => false,
				"message" => __("api.errors.login_failed")
			]);
		} else if ($customer->status == "0") {
			return response([
				"status" => false,
				"message" => __("api.customer.inactive")
			]);
		} else if ($customer->deleted_at != "") {
			return response([
				"status" => false,
				"message" => __("api.errors.removed_account_by_system")
			]);
		} else if (!Hash::check($request->password, $customer->password)) {
			return response([
				"status" => false,
				"message" => __("api.errors.password_wrong")
			]);
		}
		$customer->tokens()->delete();
		$token = $customer->createToken($customerArray["email"], ["customer"])->plainTextToken;
		/* return (new DetailsResource($customer))->additional([
			"status" => true,
			"bearer_token" => $token,
			"message" => __("api.customer.logged_in")
		]); */
	}

	/**
	 *  logs out customer
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
