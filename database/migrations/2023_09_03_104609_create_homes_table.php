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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->text('intro');
            $table->string('section_title1');
            $table->string('section_title2');
            $table->text('short_info1');
            $table->string('section_title3');
            $table->text('short_info2');
            $table->string('section_title4');
            $table->string('section_title5');
            $table->text('short_info3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
