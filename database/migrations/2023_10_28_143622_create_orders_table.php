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

            $table->string('product_ids')->nullable();
            $table->string('campany')->default('ygyg');
            $table->decimal('amount', 18, 2);
            $table->tinyInteger('state');
            $table->enum('payment_type', ['click', 'payme', 'uzum', 'oson', 'none'])->default('none');
            $table->string('policy_id')->nullable();
            $table->text('data');

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
