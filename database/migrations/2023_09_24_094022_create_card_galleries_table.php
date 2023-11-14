<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('card_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')
                ->references('id')->on('cards')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_galleries');
    }
};
