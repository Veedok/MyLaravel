<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catigoryiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catigory')->insert($this->getData());
    }
    public function getData () {
        $faker = Factory::create();
        $myNews = [];
        for ($i=0; $i < 30; $i++) {
            $myNews[] = [
                'catigory' => $faker->jobTitle(),

            ];
        }

        return $myNews;
    }
}
