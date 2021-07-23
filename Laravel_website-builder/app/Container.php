<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    // define DB elements
    protected $table = 'container';
    protected $primaryKey = 'containerId'; // removes assumption that primary key is id
    protected $containerName = 'containerName';

    public $timestamps = false; // revmoves assumption that created_at and updated_at columns exist in the table

}
