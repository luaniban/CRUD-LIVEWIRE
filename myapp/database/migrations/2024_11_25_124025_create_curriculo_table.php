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
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->char('serie', length: 255);
            $table->integer('bimestre');
            $table->char('linguagem', length: 255);
            $table->char('codigo', length: 255);
            $table->longText('descricao');
            $table->char('objeto_conhecimento', length: 255);
            $table->integer('discplina_id');
            $table->char('nivel_ensino', length: 255);
            $table->integer('origem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculos');
    }
};
