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

class AdminController extends Controller
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
     * Show the application admin index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;
			$siteData = Site::find($userId);
			
			// create site if none existing (new user)
			if(!$siteData){
				$siteData = new Site;
        $siteData->userId = $userId;
        $siteData->save();
			}
    	return view('admin.editSiteSettings', ['siteId' => $siteId, 'userId' => $userId]); // change to other page?
    }

    /**
     * Creates variables for the admin login page + calls view
     *
     */
    public function login(){
			return view('auth.login');
    }

}

?>
