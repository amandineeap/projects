<?php

/*
* IP3 - Group 2
* Website Builder - 2016
*/

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Site;
use App\PurchaseApple;
use App\PurchaseItunes;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SitePurchasesRequest;

class AdminPurchasesController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
        $this->middleware('auth');
    }

   /**
 	 * Creates variables for the purchase links page + calls view
 	 *
 	 */
 	public function editSitePurchases(){
		if (Auth::check())
		{
				$userId = Auth::user()->id;
		}
		$siteId = $userId;

		$purchase_apple_obj = PurchaseApple::where('siteId', '=', $siteId)->first();
		$purchase_itunes_obj = PurchaseItunes::where('siteId', '=', $siteId)->first();

		$purchase_apple_container = 6;
		if(empty($purchase_apple_obj)){
			$purchase_apple_obj = new PurchaseApple;
			$purchase_apple_obj->purchaseAppleUrl = '';
			$purchase_apple_obj->containerId = $purchase_apple_container;
			$purchase_apple_obj->siteId = $siteId;
			$purchase_apple_obj->save();
			$purchase_apple_obj = PurchaseApple::where('siteId', '=', $siteId)->first();
		}

		// $purchase_itunes_container = 8;
		// if(empty($purchase_itunes_obj)){
		// 	$purchase_itunes_obj = new PurchaseItunes;
		// 	$purchase_itunes_obj->purchaseItunesUrl = '';
		// 	$purchase_itunes_obj->containerId = $purchase_itunes_container;
		// 	$purchase_itunes_obj->siteId = $siteId;
		// 	$purchase_itunes_obj->save();
		// 	$purchase_itunes_obj = PurchaseItunes::where('siteId', '=', $siteId)->first();
		// }

 		return view('admin.editSitePurchases', ['siteId' => $siteId, 'userId' => $userId, 'purchase_apple_obj' => $purchase_apple_obj]);
 		//'purchase_itunes_obj' => $purchase_itunes_obj]); // change to other page?
 	}

	/**
	 * GETS variables from edit purchase links and saves to DB
	 *
	 */
	public function submitSitePurchases(SitePurchasesRequest $request){
		if (Auth::check())
		{
				$userId = Auth::user()->id;
		}
		$siteId = $userId;

		$purchase_apple_obj = PurchaseApple::where('siteId', '=', $siteId)->first();;
		$purchase_apple_url = $request->input('apple');
		$purchase_apple_obj->purchaseAppleUrl = $purchase_apple_url;
		$purchase_apple_obj->save();

		// $purchase_itunes_obj = PurchaseItunes::where('siteId', '=', $siteId)->first();;
		// $purchase_itunes_url = $request->input('itunes');
		// $purchase_itunes_obj->purchaseItunesUrl = $purchase_itunes_url;
		// $purchase_itunes_obj->save();

		return view('admin.editSitePurchases', ['siteId' => $siteId, 'userId' => $userId, 'purchase_apple_obj' => $purchase_apple_obj]); 
			//'purchase_itunes_obj' => $purchase_itunes_obj]);
}

}
