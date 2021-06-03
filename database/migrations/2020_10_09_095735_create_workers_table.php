<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->char('first_name', 20);
            $table->char('last_name', 20);
            $table->enum('posada', ['guide','turoperator', 'turagent','derector','sisadmin']);
            $table->mediumText('description');
            $table->mediumText('details');
            $table->mediumText('specialization');
            $table->date('birth');
            $table->integer('phone');
            $table->char('mail', 50);
            $table->double('exp');
            $table->char('image_url', 200);
            $table->char('instagram', 100);
            $table->char('facebook', 100);
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
        Schema::dropIfExists('workers');
    }
}
