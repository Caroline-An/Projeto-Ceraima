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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomedobememprestado',60);
            $table->string('coddobem',60);
            $table->string('nomedoprofissional',60);
            $table->integer('quantidadeemprestada');
            $table->unsignedBigInteger('saida_id');
            $table->foreign('saida_id')->references('id')->on('saidas');
            
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
