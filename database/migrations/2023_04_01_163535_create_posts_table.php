<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Domains\Users\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->string("title")->nullable()->default("New blog post");
            $table->string("subtitle")->nullable()->default("");
            $table->text("meta_desc")->nullable();
            $table->text("keywords")->nullable();
            $table->string("seo_title")->nullable();
            $table->mediumText("body")->nullable();
            $table->text("short_description")->nullable();
            $table->string('image_large')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->foreignIdFor(User::class, 'created_by');
            $table->timestamps();
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
