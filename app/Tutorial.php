<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    //Allow Mass Assignment
    protected $fillable=['title', 'plateform', 'url', 'date', 'description'];
}
