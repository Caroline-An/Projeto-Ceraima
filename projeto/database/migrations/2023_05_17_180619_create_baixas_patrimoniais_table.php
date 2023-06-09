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
        Schema::create('baixas_patrimoniais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('responsavelentregar',60);
            $table->date('datadabaixa');
            $table->string('encarregadodaretirada',60);
            $table->integer('quantidaderetirada');
            $table->string('itemretirado', 60);
            $table->string('numerodoitemretirado',60);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baixas_patrimoniais');
    }
};
