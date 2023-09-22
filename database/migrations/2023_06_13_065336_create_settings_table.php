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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('logoalt')->nullable();
            $table->string('fevicon')->nullable();
            $table->string('fevalt')->nullable();
            $table->boolean('robots')->default(0);
            $table->longText('disclaimer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
