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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name',200)->nullable();
            $table->string('slug',200)->nullable();
            $table->string('duration',100)->nullable();
            $table->string('certification',200)->nullable();
            $table->integer('privateroom')->nullable();
            $table->integer('2sharedroom')->nullable();
            $table->integer('3sharedroom')->nullable();
            $table->integer('6sharedroom')->nullable();
            $table->longText('description');
            $table->string('image')->nullable();
            $table->string('metatitle',600)->nullable();
            $table->string('metakeywords',600)->nullable();
            $table->string('metadescription',600)->nullable();
            $table->string('alt',1200)->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
