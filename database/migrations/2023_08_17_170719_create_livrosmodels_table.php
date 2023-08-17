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
        Schema::create ('livrosmodels', function (Blueprint $table)) {
            {
                Schema::create('usuarios', function (Blueprint $table) {
                    $table->id();
                    $table-> string('nome do livro', )->nullable(false);
                    $table-> string('resumo', )->nullable(false);
                    $table-> string('Autor', )->nullable(false);
                    $table-> string('Código do livro', )->unique()->nullable(false);
                    $table-> string('Imagens')->nullable(false);
                    $table->timestamps();
                });
    }
};
}
}