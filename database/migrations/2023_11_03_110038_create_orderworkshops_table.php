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
        Schema::create('orderworkshops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('workshop_id');
            $table->integer('amount');
            $table->string('payment_token_id');
            $table->string('payer_id');
            $table->string('razorpay_order_id');
            $table->string('razorpay_payment_id');
            $table->string('razorpay_signature');
            $table->boolean('status')->default(0)->comment('0=fail or 1=success');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderworkshops');
    }
};
