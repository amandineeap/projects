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
use Illuminate\Support\Facades\Input;
use Image;
use App\Http\Requests\SiteInfosRequest;
use App\Http\Requests\SiteSocialsRequest;
use App\Http\Requests\SiteAppearanceRequest;
use Log;

class ViewSiteController extends Controller
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
     * Creates variables for the admin view site page + calls view
     *
     */
    public function viewSite(){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;
			$siteData = Site::find($userId);

		 $backgroundImageUrl = DB::table('background_image')->where('siteid', ''.$siteId.'')->pluck('backgroundImageUrl');
		 $backgroundImageUrl_str = implode(',', $backgroundImageUrl);

		 $logoImageUrl = DB::table('logo_image')->where('siteid', ''.$siteId.'')->pluck('logoImageUrl');
		 $logoImageUrl_str = implode(',', $logoImageUrl);

		 $social_facebook = DB::table('social_facebook')->where('siteId', ''.$siteId.'')->pluck('socialFacebookUrl');
		 $social_facebook_str = implode(',', $social_facebook);

		 $social_twitter = DB::table('social_twitter')->where('siteId', ''.$siteId.'')->pluck('socialTwitterUrl');
		 $social_twitter_str = implode(',', $social_twitter);

		 $purchase_apple = DB::table('purchase_apple')->where('siteId', ''.$siteId.'')->pluck('purchaseAppleUrl');
		 $purchase_apple_str = implode(',', $purchase_apple);

		 $purchase_itunes = DB::table('purchase_itunes')->where('siteId', ''.$siteId.'')->pluck('purchaseItunesUrl');
		 $purchase_itunes_str = implode(',', $purchase_itunes);

     return view('admin.viewSite', ['siteId' => $siteId, 'siteData' => $siteData, 'userId' => $userId, 'backgroundImageUrl' => $backgroundImageUrl_str, 'logoUrl' => $logoImageUrl_str, 'social_facebook_str' => $social_facebook_str, 'social_twitter_str' => $social_twitter_str, 'purchase_apple_str' => $purchase_apple_str, 'purchase_itunes_str' => $purchase_itunes_str]);
    }

}
