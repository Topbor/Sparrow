<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OurTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->char('mountaine', 100);
            $table->char('country', 100);
            $table->integer('hige');        
            $table->enum('level', ['easy','medium', 'hard']);
            $table->mediumText('description');
            $table->mediumText('tour_way');
            $table->char('meet_place', 100);
            $table->char('finish_place', 100);        
            $table->char('image_url', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
