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
        Schema::create('chatmessagelogs', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->integer('chat_id');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->timestamps();
            $table->boolean('reaction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chatmessagelogs');
    }
};
