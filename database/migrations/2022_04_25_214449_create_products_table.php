<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('equipment');
            $table->foreignId('make_id')->references('id')->on('makes')->constrained()->onDelete('cascade');
            $table->foreignId('carmodel_id')->references('id')->on('car_models')->constrained()->onDelete('cascade');
            $table->foreignId('engine_id')->references('id')->on('engines')->constrained()->onDelete('cascade');
            $table->foreignId('interiorcolor_id')->references('id')->on('interior_colors')->constrained()->onDelete('cascade');
            $table->foreignId('exteriorcolor_id')->references('id')->on('exterior_colors')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
