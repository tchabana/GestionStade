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
    {//status et no de tickets
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('title');
            $table->longText('description')->nullable();
            $table->date('date_on');
            $table->time('start_at');
            $table->time('end_at');
            $table->string('authors')->nullable();
            $table->bigInteger('nbr_participant');
            $table->json('info_suplementaire')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
