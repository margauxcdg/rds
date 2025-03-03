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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->string('representative_name');
            $table->string('event_name');
            $table->string('purpose');
            $table->string('other_purpose')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('setup_date')->nullable();
            $table->time('setup_time')->nullable();
            $table->string('location');
            $table->integer('users');
            $table->foreignId('requested_by')->constrained('users')->onDelete('cascade'); 
            $table->enum('status', ['Open', 'In Progress', 'Closed', 'Declined'])->default('Open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
