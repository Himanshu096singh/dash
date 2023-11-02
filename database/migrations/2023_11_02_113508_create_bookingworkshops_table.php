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
        Schema::create('bookingworkshops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('workshop_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('price')->nullable();
            $table->string('attend')->nullable();
            $table->boolean('paymentmode')->default(0);
            $table->boolean('paymentmethod')->default(0);
            $table->foreign('workshop_id')->references('id')->on('workshops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingworkshops');
    }
};
