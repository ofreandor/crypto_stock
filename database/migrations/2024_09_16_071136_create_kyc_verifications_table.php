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
        Schema::create('kyc_verifications', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Links to the User table
                $table->string('document_type');  // e.g., passport, ID card, etc.
                $table->string('document_path');  // Path where the document is stored
                $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED'])->default('PENDING');  // KYC status
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kyc_verifications');
    }
};