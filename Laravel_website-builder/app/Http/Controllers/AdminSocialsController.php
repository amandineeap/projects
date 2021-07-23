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
use App\SocialFacebook;
use App\SocialTwitter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Image;
use App\Http\Requests\SiteInfosRequest;
use App\Http\Requests\SiteSocialsRequest;
use App\Http\Requests\SiteAppearanceRequest;
use Log;

class AdminSocialsController extends Controller
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
  	 * Creates variables for the edit social page + calls view
  	 *
  	 */
  	public function editSiteSocials(){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;

			$social_facebook_obj = SocialFacebook::where('siteId', '=', $siteId)->first();
			$social_1 = 3; // id of social link 1
			if(empty($social_facebook_obj)){ // check if user has facebook already?
				$social_facebook_obj = new SocialFacebook;
				$social_facebook_obj->socialFacebookUrl = '';
				$social_facebook_obj->socialFacebookName = '';
				$social_facebook_obj->containerId = $social_1; // order 1 by default
				$social_facebook_obj->siteId = $siteId;
				$social_facebook_obj->save();
				$social_facebook_obj = SocialFacebook::where('siteId', '=', $siteId)->first(); // get social fb object to return
			}

			$social_twitter_obj = SocialTwitter::where('siteId', '=', $siteId)->first();
			$social_2 = 7; // id of social link 2
			if(empty($social_twitter_obj)){ // check if user has facebook already?
				$social_twitter_obj = new SocialTwitter;
				$social_twitter_obj->socialTwitterUrl = '';
				$social_twitter_obj->socialTwitterName = '';
				$social_twitter_obj->containerId = $social_2; // order 2 by default
				$social_twitter_obj->siteId = $siteId;
				$social_twitter_obj->save();
				$social_twitter_obj = SocialTwitter::where('siteId', '=', $siteId)->first(); // get social fb object to return
			}

			return view('admin.editSiteSocials', ['siteId' => $siteId, 'userId' => $userId, 'social_facebook_obj' => $social_facebook_obj, 'social_twitter_obj' => $social_twitter_obj]);
  	}

  	/**
  	 * GETS variables from edit socials and saves to DB
  	 *
  	 */
  	public function submitSiteSocials(SiteSocialsRequest $request){
			if (Auth::check())
			{
					$userId = Auth::user()->id;
			}
			$siteId = $userId;

			// define social containers
			$social1 = 3;
			$social2 = 7;

			// $socialsLinks = $request->input('data');
			// foreach ($_POST['social'] as $value) {
			// 	echo '<pre>';
			//     var_dump($value);
			//     echo '</pre>';
			// }
			//print_r($_POST['social']);
			// parse_str($socialsLinks, $socialLinkOrder);
			// print_r($socialLinkOrder);

			// $i = 0;

			// foreach ($socialsLinks as $value) {
			//     // Execute statement:
			//     // UPDATE [Table] SET [Position] = $i WHERE [EntityId] = $value
			//     echo $value;
			//     $i++;
			// }

			// if($socialLinkOrder[0]){

			// }

			

			$social_facebook_obj = SocialFacebook::where('siteId', '=', $siteId)->first();
  			$social_facebook_url = $request->input('facebookUrl');
			$social_facebook_name = $request->input('facebookName');

			$social_facebook_obj->socialFacebookUrl = $social_facebook_url;
			$social_facebook_obj->socialFacebookName = $social_facebook_name;
			$social_facebook_obj->containerId = 3; // NUMBER OF SOCIAL ORDER
			$social_facebook_obj->save();

			$social_twitter_obj = SocialTwitter::where('siteId', '=', $siteId)->first();
  			$social_twitter_url = $request->input('twitterUrl');
			$social_twitter_name = $request->input('twitterName');

			$social_twitter_obj->socialTwitterUrl = $social_twitter_url;
			$social_twitter_obj->socialTwitterName = $social_twitter_name;
			$social_twitter_obj->containerId = 7;// NUMBER OF SOCIAL ORDER
			$social_twitter_obj->save();

			return view('admin.editSiteSocials', ['siteId' => $siteId, 'userId' => $userId,  'social_facebook_obj' => $social_facebook_obj, 'social_twitter_obj' => $social_twitter_obj]);
  }


}
