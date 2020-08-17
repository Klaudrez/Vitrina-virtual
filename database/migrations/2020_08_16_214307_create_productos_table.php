<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('precio');
            $table->string('priority');
            $table->text('descripcion')->nullable();
            $table->text('direccion')->nullable();
            $table->string('precioXmayor')->nullable();
            $table->boolean('aprobado');
            $table->timestamps();
            ///////////////relaciones//////////////
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
