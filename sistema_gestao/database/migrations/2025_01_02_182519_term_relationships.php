<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('term_relationships', function (Blueprint $table) {
            $table->unsignedBigInteger('object_id');
            $table->unsignedBigInteger('term_taxonomy_id');

            // Chaves estrangeiras
            $table->foreign('object_id')->references('ID')->on('posts')->onDelete('cascade');
            $table->foreign('term_taxonomy_id')->references('term_taxonomy_id')->on('term_taxonomy')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('term_relationships');
    }
};
