<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRRSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_r_s_s', function (Blueprint $table) {
            $table->id();
            $table->string('facebook')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Twitter')->nullable();
            $table->timestamps();
            ///////////////relaciones//////////////
            $table->unsignedInteger('User_id'); //USUArio ID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_r_s_s');
    }
}
