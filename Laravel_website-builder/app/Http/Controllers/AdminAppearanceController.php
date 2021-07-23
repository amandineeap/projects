<?php

/*
* IP3 - Group 2
* Website Builder - 2016
*/

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SiteInfosRequest;
use App\Http\Requests\SiteSocialsRequest;
use App\Http\Requests\SiteAppearanceRequest;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Site;
use App\BackgroundImage;
use App\BackgroundThumbnail;
use App\LogoImage;
use App\LogoThumbnail;
use Illuminate\Support\Facades\Input;
use Image;
use Log;

class AdminAppearanceController extends Controller
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
  	public function editSiteAppearance(){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;

			$background_image_obj = BackgroundImage::where('siteId', '=', $siteId)->first();
			$background_thumbnail_obj = BackgroundThumbnail::where('siteId', '=', $siteId)->first();
			$logo_image_obj = LogoImage::where('siteId', '=', $siteId)->first();
			$logo_thumbnail_obj = LogoThumbnail::where('siteId', '=', $siteId)->first();

			$background_container = 1;
			$logo_container = 2;

			if(empty($background_image_obj)){ // checks if there's a background image
				$background_image_obj = new BackgroundImage;
				$background_image_obj->containerId = $background_container;
				$background_image_obj->siteId = $siteId;
				$background_image_obj->backgroundImageUrl = '';
				$background_image_obj->save();
				$background_image_obj = BackgroundImage::where('siteId', '=', $siteId)->first();
			}

			if(empty($background_thumbnail_obj)){ // checks if there's a thumbnail background image
				$background_thumbnail_obj = new BackgroundThumbnail;
				$background_thumbnail_obj->containerId = $background_container;
				$background_thumbnail_obj->siteId = $siteId;
				$background_thumbnail_obj->backgroundThumbnailUrl = '';
				$background_thumbnail_obj->save();
				$background_thumbnail_obj = BackgroundThumbnail::where('siteId', '=', $siteId)->first();
			}

			if(empty($logo_image_obj)){ // checks if there's a logo image
				$logo_image_obj = new LogoImage;
				$logo_image_obj->containerId = $logo_container;
				$logo_image_obj->siteId = $siteId;
				$logo_image_obj->logoImageUrl = '';
				$logo_image_obj->save();
				$logo_image_obj = LogoImage::where('siteId', '=', $siteId)->first();
			}

			if(empty($logo_thumbnail_obj)){ // checks if there's a thumbnail logo image
				$logo_thumbnail_obj = new LogoThumbnail;
				$logo_thumbnail_obj->containerId = $logo_container;
				$logo_thumbnail_obj->siteId = $siteId;
				$logo_thumbnail_obj->logoThumbnailUrl = '';
				$logo_thumbnail_obj->save();
				$logo_thumbnail_obj = LogoThumbnail::where('siteId', '=', $siteId)->first();
			}

  		return view('admin.editSiteAppearance', ['siteId' => $siteId, 'userId' => $userId, 'background_image_obj' => $background_image_obj, 'background_thumbnail_obj' => $background_thumbnail_obj, 'logo_image_obj' => $logo_image_obj, 'logo_thumbnail_obj' => $logo_thumbnail_obj]); // change to other page? // 'site' => $site or compact('site')
  	}

  	/**
  	 * GETS variables from edit appearance and saves to DB
  	 *
  	 */
  	public function submitSiteAppearance(SiteAppearanceRequest $request){
			if (Auth::check())
      {
          $userId = Auth::user()->id;
      }
    	$siteId = $userId;

			$destinationPath = 'images/siteImages/';
			
			// background upload handled here
			if (Input::hasFile('image')) // if background image uploaded
			{
				if (Input::file('image')->isValid())
				{
					// source
					$sourceName = Input::file('image')->getClientOriginalName();

					// original
					$fileName = 'SiteId_' . $siteId . '_BG_ORIGINAL_' . $sourceName;
					$originalFullUrl = $destinationPath . $fileName;
					$file = Input::file('image')->move($destinationPath, $fileName);

					// thumbnail
					$thumbName = 'SiteId_' . $siteId . '_BG_THUMB_' . $sourceName;
					$thumbFullUrl = $destinationPath . $thumbName;
					Image::make($file->getRealPath())->resize(300, 200)->save($thumbFullUrl);

					$background_image_obj = BackgroundImage::where('siteId', '=', $siteId)->first();
					$background_image_obj->backgroundImageUrl = $originalFullUrl;
					$background_image_obj->save();

					$background_thumbnail_obj = BackgroundThumbnail::where('siteId', '=', $siteId)->first();
					$background_thumbnail_obj->backgroundThumbnailUrl = $thumbFullUrl;
					$background_thumbnail_obj->save();
				}
			}else{ // else if no new background, return previous data
				$background_image_obj = BackgroundImage::where('siteId', '=', $siteId)->first();
				$background_thumbnail_obj = BackgroundThumbnail::where('siteId', '=', $siteId)->first();
			}

			// logo upload handled here
			if (Input::hasFile('logo')) // if logo image uploaded
			{
				if (Input::file('logo')->isValid())
				{
					// logo source
					$logoSourceName = Input::file('logo')->getClientOriginalName();

					// logo original
					$logoFileName = 'SiteId_' . $siteId . '_LOGO_ORIGINAL_' . $logoSourceName;
					$logoOriginalFullUrl = $destinationPath . $logoFileName;
					$logoFile = Input::file('logo')->move($destinationPath, $logoFileName);

					// logo thumbnail
					$logoThumbName = 'SiteId_' . $siteId . '_LOGO_THUMB_' . $logoSourceName;
					$logoThumbFullUrl = $destinationPath . $logoThumbName;
					Image::make($logoFile->getRealPath())->resize(300, 200)->save($logoThumbFullUrl);

					// save logo image to db
					$logo_image_obj = LogoImage::where('siteId', '=', $siteId)->first();
					$logo_image_obj->logoImageUrl = $logoOriginalFullUrl;
					$logo_image_obj->save();

					// save logo thumb to db
					$logo_thumbnail_obj = LogoThumbnail::where('siteId', '=', $siteId)->first();
					$logo_thumbnail_obj->logoThumbnailUrl = $logoThumbFullUrl;
					$logo_thumbnail_obj->save();
				}
			}else{ // else if no new logo, return previous data
				$logo_image_obj = LogoImage::where('siteId', '=', $siteId)->first();
				$logo_thumbnail_obj = LogoThumbnail::where('siteId', '=', $siteId)->first();
			}

			return view('admin.editSiteAppearance', ['siteId' => $siteId, 'userId' => $userId,  'background_image_obj' => $background_image_obj, 'background_thumbnail_obj' => $background_thumbnail_obj, 'logo_image_obj' => $logo_image_obj, 'logo_thumbnail_obj' => $logo_thumbnail_obj]); // 'site' => $site or compact('site')
  }


}
