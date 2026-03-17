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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('amount');
            $table->double('payment_day');
            $table->string('notes');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('frecuency_id')->constrained();
            $table->foreignId('account_id')->constrained();
            $table->foreignId('merchant_id')->constrained();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
