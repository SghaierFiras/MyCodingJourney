<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Input; 
use Validator; 
use Redirect; 
use Mail; 
use App\Article;
class articleController extends Controller
{

    protected $rules=[
        'title'=>'bail|required',
        'plateform'=>'', 
        'url'=>'required',
        'readDate'=>'required',
        'description'=>'max:255'
    ];

    //SHOW ALL ARTICLES
    public function index(){
        $articles= Article::all();
        return view('articles.index', ['articles'=>$articles]);
        dd($articles);
    }

    //ADD NEW ARTICLE
    public function create(Article $article){

        $article=new Article;
        return view('articles.create', ['article'=>$article]);
    }

    public function store(Request $request){

        $this->validate($request, $this->rules);
        $article=Article::create($request->all());
        Session::flash('message', 'Article Added');
        return redirect()->route('articleIndex')->with('message', 'Article added');
    }
    

    //EDIT AN ARTICLE
    public function edit(Request $request, $id){
        
        $article=Article::findOrFail($id);
        return view('articles.edit', ['article'=>$article]);
    }

    public function update(Request $request, $id){
    
        $this->validate($request, $this->rules);
        $article=Article::whereId($id)->update($request->except(['_method', '_token']));
        Session::flash('message', 'Article edited succefully !');
        return redirect()->route('articleIndex', $id);

    }
    
    
    //DELETE AN ARTICLE
    public function delete(){
        
        $article=Article::findOrFail($id)->delete();
        Session::flash('message', 'Article Deleted !');
        return redirect()->route('articleIndex', $id);
    }
    
    
    //SHOW AN ARTICLE
    public function show($id){
    }
}
