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
        if (!Schema::hasTable('enderecos')) {
            Schema::create('enderecos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_usuario');
                $table->string('logradouro');
                $table->string('numero', 10)->nullable();
                $table->string('complemento')->nullable();
                $table->string('cep', 9)->nullable();
                $table->unsignedBigInteger('id_cidade');
                $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
                $table->foreign('id_cidade')->references('id')->on('cidades')->onDelete('cascade');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
