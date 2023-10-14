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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->string('duration')->nullable();
            $table->string('session')->nullable();
            $table->string('onlineprice')->nullable();
            $table->string('inpersonprice')->nullable();
            $table->longText('about')->nullable();
            $table->string('metatitle',600);
            $table->string('metakeyword',600);
            $table->string('metadescription',600);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
