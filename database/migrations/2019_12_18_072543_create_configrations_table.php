<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigrationsTable extends Migration
{
 
    public function up()
    {
        Schema::create('configrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intro_image');
            $table->string('appointment_intro');
            $table->string('logo');
            $table->string('service_image');
            $table->text('about');
            $table->string('address');
            $table->string('working_time');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');

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
        Schema::dropIfExists('configrations');
    }
}
