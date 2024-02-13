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
        if (!Schema::hasTable('endereco_usuario')) {
            Schema::create('endereco_usuario', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('usuario_id');
                $table->unsignedBigInteger('endereco_id');
                $table->timestamps();

                $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
                $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco_usuario');
    }
};
