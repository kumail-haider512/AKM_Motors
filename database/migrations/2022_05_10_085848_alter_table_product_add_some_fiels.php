<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProductAddSomeFiels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('location_id')->references('id')->on('locations')->constrained()->onDelete('cascade');
            $table->foreignId('fuel_id')->references('id')->on('fuels')->constrained()->onDelete('cascade');
            $table->foreignId('body_id')->references('id')->on('bodies')->constrained()->onDelete('cascade');
            $table->string('transmission');
            $table->string('mileage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
