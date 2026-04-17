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
        Schema::create('peturunan_bills', function (Blueprint $table) {
            $table->id();
            
            //FK
            $table->foreignid('user_id')->constrained();

            //ISI
            $table->decimal('bill_amount', 10, 2);
            $table->date('due_date');
            $table->string('payment_receipt', 255);
            $table->enum('payment_status', ['lunas', 'belum lunas']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peturunan_bills');
    }
};
