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
        Schema::create('sondages', function (Blueprint $table) {
            $table->id();
            $table->boolean('reponse1')->nullable();
            $table->string('choix1')->default('')->nullable();
            $table->string('choix2')->default('')->nullable();
            $table->string('choix3')->default('')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sondages');
    }
};
