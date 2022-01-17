<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function index($idNews) {
        $allNews = $this->getAllNews();
        foreach ($allNews as $key => $value) {
            if($value['id'] == $idNews){
                return view('singleNews',['news' => $value]);
            }
        }


    }
}
