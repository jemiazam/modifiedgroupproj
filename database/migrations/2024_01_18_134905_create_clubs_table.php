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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('short_form', 10);
            $table->float('rating');
            $table->string('contact', 20);
            $table->string('email', 50);
            $table->integer('members');
            $table->integer('upcoming_programs');
            $table->integer('ongoing_programs');
            $table->string('club_description', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
