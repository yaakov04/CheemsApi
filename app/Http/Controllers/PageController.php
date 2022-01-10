<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //var_dump(getArticles());
        //die();
        return view('index');
    }
}