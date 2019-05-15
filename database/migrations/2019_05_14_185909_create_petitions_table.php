<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->string('descripcion');
            $table->datetime('fecha');
            $table->decimal('valor');
            $table->unsignedBigInteger('asignatura_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('estado',['asignado','pendiente','cancelado'])->default('pendiente');
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
        Schema::dropIfExists('petitions');
    }
}
