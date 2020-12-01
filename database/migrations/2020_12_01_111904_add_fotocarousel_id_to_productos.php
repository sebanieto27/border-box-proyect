<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotocarouselIdToProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->unsignedBigInteger('fotocaroucel_id')->nullable();
            $table->foreign('fotocaroucel_id')->references('id')->on('foto_carousel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            //
        });
    }
}
