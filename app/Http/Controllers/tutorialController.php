<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
class tutorialController extends Controller
{
    //show all tutorials
    public function index(){
        $tutorials= Tutorial::all();
        return view('tutorials.index', ['tutorials'=>$tutorials]);
    }
}
