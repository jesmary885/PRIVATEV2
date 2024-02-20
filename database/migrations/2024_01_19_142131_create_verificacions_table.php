<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('tipo_documentos');

            $table->string('documento_frente', 2048)->nullable();
            $table->string('documento_reverso', 2048)->nullable();
            $table->string('selfie', 2048)->nullable();
            $table->string('video')->nullable();

            $table->string('caducidad_doc');//documentop  caduca o no

            $table->date('fecha_caducidad_doc')->nullable();

            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificacions');
    }
};
