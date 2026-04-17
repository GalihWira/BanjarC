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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            //FK
            $table->foreignid('user_id')->constrained();
            $table->foreignid('complaint_category_id')->constrained();

            //ISI COMPLAINTS
            $table->string('title', 50);
            $table->string('phone_number', 50);
            $table->string('address', 255);
            $table->date('complaint_date');
            $table->string('complaint_receipt', 255);
            $table->string('complaint_concern', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
