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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string("key")
                ->index()
                ->comment('using the key we will map our contents to the related front section');
            $table->string("title")->nullable();
            $table->string("subtitle")
                ->nullable()
                ->default("");
            $table->text("meta_desc")->nullable();
            $table->text("keywords")->nullable();
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
        Schema::dropIfExists('home_pages');
    }
};
