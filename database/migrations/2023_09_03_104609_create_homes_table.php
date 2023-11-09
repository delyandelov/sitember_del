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
            $table->text('services_title');
            $table->text('aboutus_title');
            $table->text('aboutus_content');
            $table->text('aboutus_button_text');
            $table->text('projects_title');
            $table->text('projects_button_text');
            $table->text('other_button_text');
            $table->text('join_content');
            $table->text('testimonials_title');
            $table->text('askus_title');
            $table->text('askus_content');
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
