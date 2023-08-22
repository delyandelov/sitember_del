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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('section1');
            $table->text('section2');
            $table->text('section3');
            $table->text('box1_title');
            $table->text('box1');
            $table->text('box2_title');
            $table->text('box2');
            $table->text('box3_title');
            $table->text('box3');
            $table->text('box4_title');
            $table->text('box4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
