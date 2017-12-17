<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create(Article $article){

        //create a new article
        $plateforms=Article::select('plateform');
        $article=new Article;
        return view('articles.create', ['article'=>$article]);
    }

    public function store(Request $request){

        // $id=Input::get('plateform');
        $article=Article::create($request->all());
        return redirect()->action('articleController@index')->with('message', 'Article Added');
    }





}
