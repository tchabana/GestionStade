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
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer('price')->nullable();

            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('etat')->nullable();
            $table->boolean('used')->default(false);
 
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('event_id')->references('id')->on('events')->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
