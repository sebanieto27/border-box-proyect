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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->integer('cantidad')->nullable();
            $table->tinyInteger('estado')->default(0);
            $table->string('marca', 50);
            $table->string('fotoPrincipal', 255);
            $table->decimal('precio', 10, 2);
            $table->text('descripcion')->nullable();
            $table->float('descuento', 6, 2)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
