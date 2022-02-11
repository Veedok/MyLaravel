<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class YandexNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yandexnews', function (Blueprint $table) {
            $table->string('title', 200 );
            $table->string('link')->default('No Name News');
            $table->text('description');
            $table->string('guid', 255);
            $table->string('pubDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yandexnews');
    }
}
