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
        Schema::create('compromissos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum("tipo", ["pontual", "recorrente", "vencimento"]);
            $table->string("nome", 200);
            $table->date("data_inicio");
            $table->string("descricao", 200);
            $table->timeTz("hora_inicio")->nullable();
            $table->timeTz("hora_fim")->nullable();
            $table->string("repeticao", 200)->nullable();
            $table->date("data_fim")->nullable();
            $table->enum("tipo_recorrencia", ["diario", "semanal", "periodico"])->nullable();
            $table->enum("dias_semana", ["dom", "seg", "ter", "qua", "qui", "sex", "sab"])->nullable();
            $table->boolean("financeiro")->nullable();
            $table->decimal("valor", 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compromissos');
    }
};
