<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    public function index () {

        $myNews = new News();
        // dd($myNews->getNews());
        // $news = $this->getAllNews();
        return view('allnews', [
            'new' => $myNews->getNews()
        ]);
    }
}
