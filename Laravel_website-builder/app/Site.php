<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    // define DB elements
    protected $table = 'sites';
    protected $primaryKey = 'siteId'; // removes assumption that primary key is id
    protected $userId = 'userId';
    protected $title = 'title';
    protected $description = 'description';
    protected $socials = 'socials';

    public $timestamps = false; // revmoves assumption that created_at and updated_at columns exist in the table

    /**
     * Get the user record associated with the site.
     */
    public function user()
    {
        return $this->hasOne('App\User');  // one to one relationship > one site has one user $site = Site::find(1)->user;
    }
  
}
