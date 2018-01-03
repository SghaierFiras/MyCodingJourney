<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Input;
use Validator;
use Redirect;
use Mail;
use App\Course;
class courseController extends Controller
{

    protected $rules=[
        'title'=>'bail|required',
        'plateform'=>'',
        'url'=>'required', 
        'startDate'=>'',
        'finishDate'=>'', 
        'category'=>'',
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
        $this->validate($request, $this->rules);
        $course=Course::create($request->all());
        return redirect()->route('courseIndex')->with('message', 'Course Added');
    }

    //EDIT A COURSE
    public function edit(Request $request, $id=null){
        $course=Course::findOrFail($id);
        return view('courses.edit', ['course'=>$course]);
    } 

    public function update(Request $request, $id){
        
        $this->validate($request, $this->rules);
        $course=Course::whereId($id)->update($request->except(['_method', '_token']));
        Session::flash('message', 'Edit Course');
        return redirect()->route('courseIndex', $id);

    }

    //DELETE A COURSE
    public function delete($id){
        $course=Course::findOrFail($id)->delete();
        Session::flash('message', 'course Deleted Succefully!');
        return redirect()->route('courseIndex');
        
    }
    
    public function show($id){
    
        

    }
}
