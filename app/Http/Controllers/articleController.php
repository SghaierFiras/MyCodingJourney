<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class articleController extends Controller
{
    //SHOW ALL ARTICLES
    public function index(){
        $articles= Article::all();
        return view('articles.index', ['articles'=>$articles]);
        dd($articles);
    }
}
