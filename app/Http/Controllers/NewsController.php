<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index(){
        return view('content.news');
    }
}
