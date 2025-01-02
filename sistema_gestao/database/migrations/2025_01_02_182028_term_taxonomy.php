<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('term_taxonomy', function (Blueprint $table) {
            $table->bigIncrements('term_taxonomy_id');
            $table->unsignedBigInteger('term_id');
            $table->string('taxonomy');
            $table->text('description')->nullable();
            $table->timestamps();

            // Chave estrangeira
            $table->foreign('term_id')->references('term_id')->on('terms')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('term_taxonomy');
    }
};
