<?php

namespace App\Http\Controllers;

use App\Models\News;

class ParentController extends Controller
{
    public function index () {
       $myNews = News::query()->select(News::$select)->paginate(9);
        return view('allnews', [
            'new' => $myNews
        ]);
    }

    public function singleNews($news_id) {
        $singleNews = News::find($news_id);
        return view('singleNews', ['news' => $singleNews]);
    }
}
