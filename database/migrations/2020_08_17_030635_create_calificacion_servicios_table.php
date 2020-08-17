<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_servicios', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->integer('puntuacion');
            $table->string('correo');
            $table->timestamps();
            ///////////////relaciones//////////////
            $table->unsignedInteger('Servicio_id'); //Usuario ID //Usuario ID
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
        Schema::dropIfExists('calificacion_servicios');
    }
}
