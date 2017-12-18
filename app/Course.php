<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //allow mass assignment
    protected $fillable=['title', 'plateform', 'url', 'startDate', 'finishDate', 'description'];
}
