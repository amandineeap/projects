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

class AdminInfosController extends Controller
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
		public function editSiteInfos(){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;
			$siteData = Site::find($userId);

			return view('admin.editSiteInfos', ['siteId' => $siteId, 'userId' => $userId, 'siteData' => $siteData]);
		}

    /**
     * GETS variables from edit information and saves to DB
     *
     */
    public function submitSiteInfos(SiteInfosRequest $request){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;
			$siteData = Site::find($userId);

      $title = $request->input('title');
      $description = $request->input('description');

			$siteData->title = $title;
			$siteData->description = $description;
			$siteData->save();

      return view('admin.editSiteInfos', ['siteId' => $siteId, 'userId' => $userId, 'siteData' => $siteData]);
    }


}
