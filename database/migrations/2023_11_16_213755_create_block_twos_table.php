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
        Schema::create('block_twos', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('preview_title_1');
            $table->longText('preview_title_2');
            $table->longText('preview_title_3');
            $table->longText('description_1');
            $table->longText('description_2');
            $table->longText('description_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_twos');
    }
};
