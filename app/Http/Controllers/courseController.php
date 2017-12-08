<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class courseController extends Controller
{
    public function index(){

        //show all courses
        $courses= Course::all();
        return view('courses.index', ['courses'=>$courses]);
    }
}
