<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('post_meta', function (Blueprint $table) {
            $table->bigIncrements('meta_id'); // ID do metadado
            $table->unsignedBigInteger('post_id'); // ID do post
            $table->string('meta_key'); // Chave do metadado
            $table->text('meta_value')->nullable(); // Valor do metadado
            $table->timestamps();

            // Chave estrangeira
            $table->foreign('post_id')->references('ID')->on('posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_meta');
    }
};
