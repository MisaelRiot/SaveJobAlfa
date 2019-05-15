<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteraccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interaccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peticion');
            $table->unsignedBigInteger('ofrecimiento');
            $table->decimal('valor');
            $table->enum('estado',['En desarrollo','terminada','cancelado'])->default('En desarrollo');
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
        Schema::dropIfExists('interaccions');
    }
}
