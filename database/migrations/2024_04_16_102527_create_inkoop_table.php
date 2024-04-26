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
        Schema::create('inkoop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->decimal('price', 5,2)->nullable();
            $table->string('image')->nullable();
            $table->string('color')->nullable();
            $table->integer('height_cm')->nullable();
            $table->integer('width_cm')->nullable();
            $table->integer('depth_cm')->nullable();
            $table->integer('weight_gr')->nullable();
            $table->integer('stock')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inkoop');
    }
};
