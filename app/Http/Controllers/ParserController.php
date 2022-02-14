<?php

namespace App\Http\Controllers;

use App\Contracts\Parser;
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
    public function __invoke(Request $request, Parser $service)
    {
        $xml = 'https://news.yandex.ru/movies.rss';


        // dd($service->setLink($xml)->parse()['news']);
        foreach ($service->setLink($xml)->parse()['news'] as $key => $value) {
            $test = Yandexnews::create($value);
            dump($test);
        }
    }
}
