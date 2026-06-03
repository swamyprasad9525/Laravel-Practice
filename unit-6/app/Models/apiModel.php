<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; //make sure you have this import for MongoDB

class apiModel extends Model
{
    //
    protected $connection='mongodb';
    protected $collection='Studentdata';
    protected $fillable=['name','email'];
}
