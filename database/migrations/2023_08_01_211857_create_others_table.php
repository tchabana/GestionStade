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
        Schema::create('others', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('designation');
            $table->unsignedBigInteger('event_id');
            $table->json('info_suplementaire')->nullable();
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete("cascade")->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('others');
    }
};
