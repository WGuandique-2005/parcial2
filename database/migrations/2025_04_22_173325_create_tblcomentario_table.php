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
        Schema::create('tblcomentario', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id');
            $table->integer('historia_id');
            $table->string('contenido');
            $table->foreign('usuario_id')->references('id')->on('tblusuario');
            $table->foreign('historia_id')->references('id')->on('tblhistoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblcomentario');
    }
};
