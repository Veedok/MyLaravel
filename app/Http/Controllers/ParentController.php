<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    public function index () {
        $news = $this->getAllNews();
        return view('index', [
            'new' => $news
        ]);
    }
}
