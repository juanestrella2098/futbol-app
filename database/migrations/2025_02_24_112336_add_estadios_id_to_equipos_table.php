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
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn('estadio'); // Elimina el campo estadio
            $table->foreignId('estadio_id')->constrained(); // Añade la clave foránea
        });
    }

    public function down(): void
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->string('estadio');
            $table->dropForeign(['estadio_id']);
            $table->dropColumn('estadio_id');
        });
    }
};
