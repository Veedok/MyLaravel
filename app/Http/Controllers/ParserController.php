<?php

namespace App\Http\Controllers;

use App\Contracts\Parser;
use App\Jobs\NewsParsingJob;
use App\Models\Parsingurl;
use App\Models\Yandexnews;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $arrurls = Parsingurl::all();
        foreach($arrurls as $value){
            dispatch(new NewsParsingJob($value->url));
        }
    }
}
