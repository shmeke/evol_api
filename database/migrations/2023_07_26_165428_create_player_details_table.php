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
        Schema::create('player_details', function (Blueprint $table) {
            $table->id();
            $table->integer('playerId');
            $table->string('name');
            $table->longText('hobbies');
            $table->longText('personal_traits');
            $table->longText('looking_for_in_partner');
            $table->integer('number_of_matches');
            $table->string('current_long_lat');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_details');
    }
};
