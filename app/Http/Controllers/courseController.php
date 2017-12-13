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

    public function create(Course $course){
        //create a new course
        $courses= Course::all();
        return view('courses.create', ['courses'=>$courses]);

        

    }

    public function store(Course $course){

        //store the new created course
        $input= Input::all();
        Course::create($input);
        return Redirect::route('courses.index')->with('message', 'Course Added');
    }
}
