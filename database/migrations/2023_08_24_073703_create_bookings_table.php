<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('room_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('amount',['1','2','3','4','5','6','7','8','9']);
            $table->string('room_type');
            $table->integer('room_count');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->timestamps();
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
