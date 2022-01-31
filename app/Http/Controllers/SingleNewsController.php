<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function index($idNews) {

        $allNews = new News();
        foreach ($allNews->getNews() as $key => $value) {
            if($value->id == $idNews){
                return view('singleNews',['news' => $value]);
            }
        }


    }
}
