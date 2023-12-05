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
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('hobbies', 255)->nullable(false);
            $table->boolean('smoking')->nullable(false);
            $table->boolean('introvert')->nullable(false);
            $table->boolean('food_separated')->nullable(false);
            $table->string('cleaning')->nullable(false);
            $table->string('religion')->nullable(false);
            $table->boolean('wifi')->nullable(false);
            $table->string('visiting_family_times');
            // Foreign key relationship
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interests');

    }
};
