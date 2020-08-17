<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedSolidariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_solidarias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('aprobado');
            $table->timestamps();
            ///////////////relaciones//////////////
            //$table->unsignedInteger('User_id'); //Usuario ID
            $table->unsignedBigInteger('User_id'); // Relación con User
            $table->foreign('User_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('red_solidarias');
    }
}
