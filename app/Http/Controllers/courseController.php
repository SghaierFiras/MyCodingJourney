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

    protected $rules=[
        'title'=>'bail|required',
        'plateform'=>'required',
        'url'=>'required', 
        'startDate'=>'',
        'finishDate'=>'', 
        'category'=>'required',
        'description'=>'max:255',
    ];
    public function index(){

        //show all courses
        $courses= Course::all();
        return view('courses.index', ['courses'=>$courses]);
    }

    //ADD A COURSE
    public function create(Course $course){

        $course =new Course;
        return view('courses.create', ['course'=>$course]); 

    }

    public function store(Request $request){
        // $this->validate($request, $this->rules);
        $course=Course::create($request->all());
        return redirect()->route('courseIndex')->with('message', 'Course Added');
    }

    //EDIT A COURSE
    public function edit(Request $request, $id=null){
        dd($id);
        $course=Course::find($id);
        return view('courses.edit', ['course'=>$course]);
    } 

    public function update(Request $request, $id){

        $course=Course::update($request::all());
        Session::flash('message', 'Edit Course');
        return redirect::action('courseController@index', $course->slug, $id);

    }

    //DELETE A COURSE
    public function delete($id){
        $course=Course::find($id);
        
    }
    
    public function show($id){
    
        

    }
}
