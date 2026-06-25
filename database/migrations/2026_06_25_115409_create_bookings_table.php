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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained('guests')->onDelete('restrict');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->string('status')->default('pending'); // 'pending', 'confirmed', 'checked_in', 'cancelled'
            $table->string('payment_status')->default('unpaid'); // 'unpaid', 'paid', 'refunded'
            $table->integer('total_amount_cents');
            $table->text('special_requests')->nullable();
            $table->timestamps();

            // Indexing for search performance on dates
            $table->index(['check_in_date', 'check_out_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
