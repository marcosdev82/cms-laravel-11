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
            $table->unsignedBigInteger('author_id'); // Relaciona com o ID do autor na tabela de usuários
            $table->dateTime('date');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type');
            $table->text('content');
            $table->string('status')->default('draft'); // Status do post (draft, published, etc.)
            $table->integer('menu_order')->default(0); // Ordem do menu
            $table->timestamps();

            // Definir a chave estrangeira
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
