<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar la migración.
     */
    public function up(): void
    {
        Schema::create('catalog_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('height');
            $table->string('length');
            $table->string('width');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * eliminar la migracion.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_products');
    }
};
