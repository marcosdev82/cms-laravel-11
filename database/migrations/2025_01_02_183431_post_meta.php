<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('post_meta', function (Blueprint $table) {
            $table->unsignedBigInteger('meta_id')->autoIncrement(); // BIGINT(20)
            $table->unsignedBigInteger('post_id'); // BIGINT(20)
            $table->string('meta_key', 255); // VARCHAR(255)
            $table->longText('meta_value')->nullable(); // LONGTEXT
            $table->timestamps();

            $table->foreign('post_id')->references('ID')->on('posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_meta');
    }
};
