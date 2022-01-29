<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () {

        $myNews = News::all();

        // dd($myNews);
        return view('test',['news' => $myNews]);


    }
}
