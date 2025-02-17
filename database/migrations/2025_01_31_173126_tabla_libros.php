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
        Schema::create('tabla_libros', function(BluePrint $tabla) {
            $tabla->id();
            $tabla->string('titulo');
            $tabla->integer('paginas');
            $tabla->string('editorial');
            $tabla->string('autor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
