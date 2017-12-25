<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Allow Mass Assignment
    protected $fillable=['title', 'plateform', 'url', 'readDate', 'description'];
}
