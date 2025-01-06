<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('term_taxonomy', function (Blueprint $table) {
            $table->bigIncrements('term_taxonomy_id'); // BIGINT(20) auto-increment
            $table->unsignedBigInteger('term_id'); // BIGINT(20)
            $table->string('taxonomy', 32); // VARCHAR(32)
            $table->longText('description')->nullable(); // LONGTEXT
            $table->unsignedBigInteger('parent')->default(0); // BIGINT(20)
            $table->unsignedBigInteger('count')->default(0); // BIGINT(20)
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
