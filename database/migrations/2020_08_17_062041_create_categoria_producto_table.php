<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_producto', function (Blueprint $table) {
            $table->id();
            //$table->unsignedInteger('producto_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('Producto_id'); // Relación con User
            $table->foreign('Producto_id')->references('id')->on('productos');
            //$table->unsignedInteger('categoria_id'); //Usuario ID //Usuario ID
            $table->unsignedBigInteger('Categoria_id'); // Relación con User
            $table->foreign('Categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('categoria_producto');
    }
}
