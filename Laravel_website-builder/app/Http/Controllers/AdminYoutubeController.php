<?php

/*
* IP3 - Group 2
* Website Builder - 2016
*/

namespace App\Http\Controllers;

use App\Http\Requests\YoutubeRequest;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Site;
use App\Youtube;
use Illuminate\Support\Facades\Input;
use Image;
use App\Http\Requests\SiteInfosRequest;
use App\Http\Requests\SiteSocialsRequest;
use App\Http\Requests\SiteAppearanceRequest;
use Log;

class AdminYoutubeController extends Controller
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
		 * Creates variables for the admin edit site page + calls view
		 *
		 */
	public function editYoutube(){
		if (Auth::check())
		{
		  $userId = Auth::user()->id;
		}

    	$siteId = $userId;


    	$youtube_obj = Youtube::where('siteId', '=', $siteId)->first();
		if(empty($youtube_obj)){ // check if user has facebook already?
			$youtube_obj = new Youtube;
			$youtube_obj->channel = '';
			$youtube_obj->siteId = $siteId;
			$youtube_obj->save();
			$youtube_obj = Youtube::where('siteId', '=', $siteId)->first(); // get social youtube object to return
		}



			$channelData = Site::find($userId);

		return view('admin.editYoutube', ['siteId' => $siteId, 'userId' => $userId, 'youtube_obj' => $youtube_obj]);
	}



	public function submitYoutube(YoutubeRequest $request){
		if (Auth::check())
		{
			$userId = Auth::user()->id;
		}
		$siteId = $userId;

		$youtube_obj = Youtube::where('siteId', '=', $siteId)->first();
		$youtube_channel = $request->input('channel');

		$youtube_obj->channel = $youtube_channel;
		$youtube_obj->save();

		// $chanId = $userId;
		// $channelData = Site::find($userId);

		// $channel = $request->input('channel');


		// $channelData->channel = $channel;

		// $channelData->save();

		return view('admin.editYoutube', ['siteId' => $siteId, 'userId' => $userId, 'youtube_obj' => $youtube_obj]);
	}

    /**
     * GETS variables from edit information and saves to DB
     *
     */



}
