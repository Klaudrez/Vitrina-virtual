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
            //$table->unsignedInteger('Usuario_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('User_id'); // Relación con User
            $table->foreign('User_id')->references('id')->on('users');
            //$table->unsignedInteger('Admin_id'); //Usuario ID
            $table->unsignedBigInteger('Admin_id'); // Relación con User
            $table->foreign('Admin_id')->references('id')->on('admins');
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
