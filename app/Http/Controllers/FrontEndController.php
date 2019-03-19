<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index(){
        
        return view('java.index');
    }

    public function show(){
        
        return view('java.show');
    }

    
}

