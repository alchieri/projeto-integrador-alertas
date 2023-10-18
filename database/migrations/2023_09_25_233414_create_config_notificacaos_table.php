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
        Schema::create('config_notificacaos', function (Blueprint $table) {
            $table->id();
            $table->string("descricao", 200);
            $table->string("tipo", 200);
            $table->date("data_notificacao");
            $table->timeTz("hora_notificacao");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_notificacaos');
    }
};
