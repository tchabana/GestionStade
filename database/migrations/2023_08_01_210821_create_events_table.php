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
    {//ajout des attributs: nbr_ticket_genere, status et deboubler l'attribut date
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('title');
            $table->longText('description')->nullable();
            $table->date('date_start');
            $table->date('date_end');
            $table->time('start_at');
            $table->time('end_at');
            $table->string('authors')->nullable();
            $table->bigInteger('nbr_participant');
            $table->bigInteger("nbr_ticket_gen");
            $table->bigInteger('nbr_likes');
            $table->string('image_path')->nullable();
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
