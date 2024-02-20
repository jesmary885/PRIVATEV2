<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username');

            $table->date('fecha_nacimiento')->nullable();

            $table->unsignedBigInteger('pais_id')->nullable();
            $table->foreign('pais_id')->references('id')->on('pais');

            $table->unsignedBigInteger('gener_id')->nullable();
            $table->foreign('gener_id')->references('id')->on('geners');

            $table->string('estado');

            $table->string('codigo_referido')->nullable();

            $table->string('balance')->nullable();

            $table->text('session_id')
            ->nullable()
            ->default(null)
            ->comment('Almacena el id de la sesión del usuario');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            
            $table->string('profile_photo_path', 2048)->nullable();

            $table->longText('biografia')->nullable();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
