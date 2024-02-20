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
        Schema::create('ganancias_empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('concepto');
            $table->string('ganancia');
            $table->string('estado'); //ya pagada, pendiente por pagar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ganancias_empresas');
    }
};
