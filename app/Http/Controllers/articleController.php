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
    //SHOW ALL ARTICLES
    public function index(){
        $articles= Article::all();
        return view('articles.index', ['articles'=>$articles]);
        dd($articles);
    }

    //ADD NEW ARTICLE
    public function create(Article $article){

        //create a new article
        $plateforms=Article::select('plateform');
        $article=new Article;
        return view('articles.create', ['article'=>$article]);
    }

    public function store(Request $request){

        // $id=Input::get('plateform');
        $article=Article::create($request->all());
        Session::flash('message', 'Article Added');
        return redirect()->action('articleController@index', $article->slug);
    }
    

    //EDIT AN ARTICLE
    public function edit(Request $request, $id){
        
        $article=Article::find($id);
        return view('articles.edit', ['article'=>$article]);
    }

    public function update(Request $request, $id){
    
        $article=Article::update($request::all());
        Session::flash('message', 'Edit Article');
        return redirect()->action('articleController@index', $article->slug, $id);

    }
    
    
    //DELETE AN ARTICLE
    public function delete(){
        
        $article=Article::find($id);
        $article->delete();
        Session::flash('message', 'Article Deleted !');
        return redirect::route('articles.index');
    }
    
    
    //SHOW AN ARTICLE
    public function show($id){

        //show an article
        $article=Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }
}
