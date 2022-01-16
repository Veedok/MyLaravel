<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index ($cat_id) {
        $allNews = $this->getAllNews();
        $filterNews = [];
        foreach ($allNews as $key => $value) {
            if($value['id_category'] == $cat_id){
            array_push($filterNews, $value);
            }
        }
        return view('categoryNews',['news' => $filterNews]);

    }
}
