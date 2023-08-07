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
            $table->bigIncrements("id");
            $table->unsignedBigInteger("equipe1_id");
            $table->unsignedBigInteger("equipe2_id");
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('score_id');
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('equipe1_id')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('equipe2_id')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
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
