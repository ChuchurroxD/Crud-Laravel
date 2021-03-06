<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->decimal('precio_compra',9,3);
            $table->decimal('precio_venta',9,3);
            $table->tinyInteger('moneda');
            $table->integer('unidad_entrega_id')->unsigned();
            $table->foreign('unidad_entrega_id')->references('id')->on('unidad_entregas');
            $table->integer('familia_id')->unsigned();
            $table->foreign('familia_id')->references('id')->on('familias');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('stock_minimo');
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
        Schema::drop('materiales');
    }
}

