<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('telefono', 200)->nullable();
            $table->string('oficina1', 200)->nullable();
            $table->string('oficina2', 200)->nullable();
            $table->string('email')->nullable();
            $table->string('calle', 100)->nullable();
            $table->string('numero')->nullable();
            $table->string('cp')->nullable();
            $table->string('ciudad', 200)->nullable();
            $table->string('provincia', 200)->nullable();
            $table->string('twitter', 200)->nullable();
            $table->string('facebook', 200)->nullable();
            $table->string('instagram', 200)->nullable();
            $table->string('youtube', 200)->nullable();
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
        Schema::dropIfExists('configuracion');
    }
}
