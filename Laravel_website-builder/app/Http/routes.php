<?php

/*
* IP3 - Group 2
* Website Builder - 2016
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('/', function(){
	return view('layouts.builder');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('manage', 'AdminController@index');

    Route::get('editSite', [ 'as' => 'editSite' , 'uses' => 'AdminSettingsController@editSite']); // change to other page?
	Route::get('editSiteSettings', [ 'as' => 'editSiteSettings' , 'uses' => 'AdminSettingsController@editSiteSettings']);

	Route::get('editSiteInfos', [ 'as' => 'editSiteInfos' , 'uses' => 'AdminInfosController@editSiteInfos']);
    Route::post('editSiteInfos', [ 'as' => 'submitSiteInfos' , 'uses' => 'AdminInfosController@submitSiteInfos']);

	Route::get('editSiteAppearance', [ 'as' => 'editSiteAppearance' , 'uses' => 'AdminAppearanceController@editSiteAppearance']);
	Route::post('editSiteAppearance', [ 'as' => 'submitSiteAppearance' , 'uses' => 'AdminAppearanceController@submitSiteAppearance']);

	Route::get('editSiteSocials', [ 'as' => 'editSiteSocials' , 'uses' => 'AdminSocialsController@editSiteSocials']);
	Route::post('editSiteSocials', [ 'as' => 'submitSiteSocials' , 'uses' => 'AdminSocialsController@submitSiteSocials']);

	Route::get('editSitePurchases', [ 'as' => 'editSitePurchases' , 'uses' => 'AdminPurchasesController@editSitePurchases']);
	Route::post('editSitePurchases', [ 'as' => 'submitSitePurchases' , 'uses' => 'AdminPurchasesController@submitSitePurchases']);

	Route::get('editYoutube', [ 'as' => 'editYoutube' , 'uses' => 'AdminYoutubeController@editYoutube']);
    Route::post('editYoutube', [ 'as' => 'submitYoutube' , 'uses' => 'AdminYoutubeController@submitYoutube']);

    Route::get('viewSite', [ 'as' => 'viewSite' , 'uses' => 'ViewSiteController@viewSite']);
});
