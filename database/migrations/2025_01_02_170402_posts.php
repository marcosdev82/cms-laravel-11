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
            $table->unsignedBigInteger('post_author');
            $table->dateTime('post_date');
            $table->dateTime('post_date_gmt')->nullable();
            $table->longText('post_title');
            $table->text('post_excerpt')->nullable();
            $table->string('post_status', 20)->default('draft');
            $table->string('comment_status', 20)->nullable(); // VARCHAR(20)
            $table->string('ping_status', 20)->nullable(); // VARCHAR(20)
            $table->string('post_password', 20)->nullable(); // VARCHAR(20)
            $table->text('to_ping')->nullable(); // TEXT
            $table->text('pinged')->nullable(); // TEXT
            $table->dateTime('post_modified')->nullable(); // DATETIME
            $table->dateTime('post_modified_gmt')->nullable(); // DATETIME
            $table->longText('post_content_filtered')->nullable(); // LONGTEXT
            $table->unsignedBigInteger('post_parent')->default(0); // BIGINT(20)
            $table->string('guid', 255); // VARCHAR(255)
            $table->integer('menu_order')->default(0); // INT(11)
            $table->string('post_type', 100); // VARCHAR(100)
            $table->string('post_mime_type', 100)->nullable(); // VARCHAR(100)
            $table->unsignedBigInteger('comment_count')->default(0); // BIGINT(20)

            $table->primary('ID'); // Define ID como chave primária
            $table->timestamps();

            $table->foreign('post_author')->references('id')->on('users')->onDelete('cascade');
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
