<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getArrayNews(): array {
        $faker = Factory::create();
        $myNews = [];
        for ($i=0; $i < 30; $i++) {
            $myNews[] = [
                'id' => $i,
                'id_category' => $i%4,
                'title' => $faker->jobTitle(),
                'disc' => $faker->text(800),
                'author' => $faker->userName(),
                'created_at' => now('Europe/Moscow')
            ];
        }
        return $myNews;
    }
    public function getAllNews() : array {
        // $myAllNews=[];
        // for ($i=0; $i < 5 ; $i++) {
        //     $myAllNews[] = ['Категория №' . $i => $this->getArrayNews()];
        // }
        // return $myAllNews;
        return $this->getArrayNews();
    }
}
