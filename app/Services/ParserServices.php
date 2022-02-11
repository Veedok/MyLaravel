<?php
declare(strict_types = 1);
namespace App\Services;

use App\Contracts\Parser;
use Laravie\Parser\Document;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserServices implements Parser {

    private Document $document;
    public function setLink(string $link) : self {
        $this->document = XmlParser::load($link);
        return $this;
    }
    public function parse() :array {
      return  $this->document->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ],
        ]);
    }

}
