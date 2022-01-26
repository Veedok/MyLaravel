<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatygoryHasNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catygory_has_news', function (Blueprint $table) {
            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id')->references('id')->on('news');
            $table->unsignedBigInteger('catigory_id');
            $table->foreign('catigory_id')->references('id')->on('catigory');
            // $table->foreignId('news_id')->references('news')->cascadeOnDelete();
            // $table->foreignId('catigory_id')->references('catigory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catygory_has_news');
    }
}
