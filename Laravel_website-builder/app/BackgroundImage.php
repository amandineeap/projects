<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackgroundImage extends Model
{
    // define DB elements
    protected $table = 'background_image';
    protected $primaryKey = 'backgroundImageId'; // removes assumption that primary key is id
    protected $backgroundImageUrl = 'backgroundImageUrl';
    protected $containerId = 'containerId';
    protected $siteId = 'siteId';

    public $timestamps = false; // revmoves assumption that created_at and updated_at columns exist in the table

    /**
     * Get the user record associated with the site.
     */
    public function container()
    {
        return $this->hasOne('App\Container');  // one to one relationship > one site has one user $site = Site::find(1)->user;
    }
    /**
     * Get the user record associated with the site.
     */
    public function site()
    {
        return $this->hasOne('App\Site');  // one to one relationship > one site has one user $site = Site::find(1)->user;
    }

}
