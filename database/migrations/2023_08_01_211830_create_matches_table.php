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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string("equipe1_name");
            $table->string("equipe2_name");
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('score_id');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('score_id')->references('id')->on('scores')->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
