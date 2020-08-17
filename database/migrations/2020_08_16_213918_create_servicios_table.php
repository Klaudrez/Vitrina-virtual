<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('priority');
            $table->text('descripcion')->nullable();
            $table->text('direccion')->nullable();
            $table->boolean('aprobado');
            $table->timestamps();
            ///////////////relaciones//////////////
            $table->unsignedInteger('Usuario_id'); //Usuario ID //Usuario ID
            $table->unsignedInteger('Admin_id'); //Usuario ID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
