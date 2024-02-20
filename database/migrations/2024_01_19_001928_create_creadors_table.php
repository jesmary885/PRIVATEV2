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
        Schema::create('creadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->longText('direccion')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('retiro_pendiente')->nullable();
            $table->string('visualizacion_todos')->nullable();

            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();

            $table->string('banner', 2048)->nullable();

            $table->string('estado_verificacion')->nullable();

            $table->string('estado');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creadors');
    }
};
