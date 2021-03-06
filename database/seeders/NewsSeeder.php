<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }
    public function getData () {
        $faker = Factory::create();
        $myNews = [];
        for ($i=0; $i < 30; $i++) {
            $myNews[] = [
                'title' => $faker->jobTitle(),
                'desc' => $faker->text(800),
                'author' => $faker->userName()
            ];
        }

        return $myNews;
    }
}
