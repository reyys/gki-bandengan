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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->string("slug");
            $table->string("image");
            $table->foreignId("user_id")->constrained(
                table : "users",
                indexName : "blogs_user_id"
            );
            $table->foreignId("category_id")->constrained(
                table : "categories",
                indexName : "blogs_category_id"
            );
            $table->longText("description");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
