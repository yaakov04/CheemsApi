<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data'=>[
                route('v1.index'),
                route('articles.index'),
                route('articles.index')."/{article}",
                route('newspapers.index'),
                route('newspapers.index')."/{newspaper}",
            ]
        ]);
    }

}
