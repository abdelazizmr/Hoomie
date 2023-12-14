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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id');
            $table->unsignedBigInteger('receiver_id');
            $table->text('message');
            $table->timestamp('timestamp')->default(now());

            // Foreign key relationships
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');;
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade')
                ->onUpdate('cascade');;

            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
