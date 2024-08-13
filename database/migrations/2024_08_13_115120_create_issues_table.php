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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('authority_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['reported', 'in_progress', 'resolved']);
            $table->string('location');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');;
            $table->foreign('authority_id')->references('id')->on('authorities')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
