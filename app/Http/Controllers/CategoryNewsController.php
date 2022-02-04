<?php

namespace App\Http\Controllers;

use App\Models\Catrgoty;

class CategoryNewsController extends Controller
{
    public function index () {
        $cat = Catrgoty::paginate(8);
        return view('allcatigories', ['allcat' => $cat]);
    }
}
