<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () {

        $myNews = new News();

        // dd($myNews->getNews());
        return view('test',['news' => $myNews->getNews()]);


    }
}
