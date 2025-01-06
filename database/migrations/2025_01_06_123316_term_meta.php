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
        Schema::create('metas', function (Blueprint $table) {
            $table->id(); // Adiciona um campo de ID auto-incremento
            $table->bigInteger('meta_id')->index();
            $table->bigInteger('term_id')->index();
            $table->string('meta_key', 255);
            $table->longText('meta_value');
            $table->timestamps(); // Adiciona campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
