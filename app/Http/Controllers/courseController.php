<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Mail;
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

        $course =new Course;
        return view('courses.create', ['course'=>$course]); 

    }

    public function store(Request $request){
        
        $course=Course::create($request->all());
        return redirect()->action('courseController@index')->with('message', 'Course Added');;
    }
    
    public function show($id){
    
        

    }
}
