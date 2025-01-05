<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->bigIncrements('term_id');
            $table->string('name');
            $table->string('slug', 200)->unique(); // Cria a coluna slug como VARCHAR(200) e define como UNIQUE
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('term_group')->default(0); // Cria a coluna term_group como BIGINT UNSIGNED e define o valor padrão como 0
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('terms');
    }
};
