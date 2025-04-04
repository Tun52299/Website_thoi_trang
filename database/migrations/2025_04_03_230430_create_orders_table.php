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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->tinyInteger('status')->default(0); // 0: pending, 1: shipped, 2: delivered, 3: canceled
            $table->string('payment'); // cash on delivery
            $table->decimal('total', 10, 2);
            $table->integer('voucher_code')->nullable(); // voucher code
            $table->decimal('sale_price', 10, 2)->default(0); // discount amount
            $table->decimal('payment_amount', 10, 2); // amount paid
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
