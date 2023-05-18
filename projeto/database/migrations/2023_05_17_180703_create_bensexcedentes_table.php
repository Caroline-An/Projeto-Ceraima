<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bensexcedentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descricaodoexcedente',80);
            $table->string('observacoes',80);
            $table->integer('quantidadeexcedente');            
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bensexcedentes');
    }
};
