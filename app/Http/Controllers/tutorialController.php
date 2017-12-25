<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
use Session;
use Input;
use Validator;
use Redirect;
use Mail;
class tutorialController extends Controller
{
    protected $rules=[
        'title'=>'bail|required',
        'plateform'=>'', 
        'url'=>'required',
        'date'=>'required',
        'description'=>'max:255'
    ];

    //SHOW ALL TUTORIALS
    public function index(){
        $tutorials= Tutorial::all();
        return view('tutorials.index', ['tutorials'=>$tutorials]);
    }

    //ADD NEW TUTORIAL
    public function create(Tutorial $tutorial){

        $tutorial=new Tutorial;
        return view('tutorials.create', ['tutorial'=>$tutorial]);
    }

    public function store(Request $request){

        $this->validate($request, $this->rules);
        $tutorial=Tutorial::create($request->all());
        Session::flash('message', 'Tutorial Added');
        return redirect()->route('tutorialIndex')->with('message', 'Tutorial added');
    }
    

    //EDIT AN TUTORIAL
    public function edit(Request $request, $id){
        
        $tutorial=Tutorial::findOrFail($id);
        return view('tutorials.edit', ['tutorial'=>$tutorial]);
    }

    public function update(Request $request, $id){
    
        $this->validate($request, $this->rules);
        $tutorial=Tutorial::whereId($id)->update($request->except(['_method', '_token']));
        Session::flash('message', 'Tutorial edited succefully !');
        return redirect()->route('tutorialIndex', $id);

    }
    
    
    //DELETE AN TUTORIAL
    public function delete(){
        
        $tutorial=Tutorial::findOrFail($id)->delete();
        Session::flash('message', 'Tutorial Deleted !');
        return redirect()->route('tutorialIndex', $id);
    }
    
    
    //SHOW AN TUTORIAL
    public function show($id){
    }
}
