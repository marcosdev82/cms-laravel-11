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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('author_id');
            $table->dateTime('date');
            $table->dateTime('date_expire')->nullable();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->string('type');
            $table->longText('content')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('status')->default('draft'); // public | pending | draft | future | private | trash
            $table->integer('parent')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('restrict')->default(0);
            $table->string('password')->nullable();
            $table->integer('menu_order')->default(0);
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
