<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    // define DB elements
    protected $table = 'youtube';
    protected $primaryKey = 'youtubeId'; // removes assumption that primary key is id
    protected $channel = 'channel';
    protected $siteId = 'siteId';

    public $timestamps = false; // revmoves assumption that created_at and updated_at columns exist in the table

    /**
     * Get the user record associated with the site.
     */
    public function site()
    {
        return $this->hasOne('App\Site');  // one to one relationship > one site has one user $site = Site::find(1)->user;
    }
  
}
