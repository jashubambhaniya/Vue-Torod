<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Api\Customer\DetailsResource;

class CustomerController extends Controller
{
	/**
	 *  get customer data
	 */
	public function details()
	{
		$user = Auth::user();
		/* return (new DetailsResource($user))->additional([
			"status" => true,
			"message" => __("api.customer.data_fetch_succ")
		]); */
	}
}
