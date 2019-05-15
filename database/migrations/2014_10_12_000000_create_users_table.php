<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->unsignedBigInteger('documento')->unique();
            $table->smallInteger('tipodocumento');
            $table->date('fechaNacimiento');
            $table->unsignedBigInteger('telefono')->unique();
            $table->string('direccion');
            $table->string('institucion');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('certificado');
            $table->string('foto')->default('default.jpg');
            $table->boolean('terminosCondiciones');
            $table->boolean('isValidated')->default(false);
            $table->boolean('isConected')->default(true);
            $table->enum('estado', ['buscando', 'asignado','pasivo'])->default('pasivo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
