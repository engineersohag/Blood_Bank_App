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
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            // Basic info
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('optional_number')->nullable();

            // Personal details
            $table->text('present_address');
            $table->string('blood_group');
            $table->integer('weight')->nullable();
            $table->date('last_blood_donate')->nullable();

            // Image
            $table->string('photo')->nullable();

            // JSON documents
            $table->json('documents')->nullable();

            // Status / workflow
            $table->boolean('email_verify')->default(0); // 0 = unverified, 1 = verified
            $table->boolean('status')->default(1);       // 1 = active, 0 = inactive
            $table->string('node')->nullable();

            // Donation
            $table->integer('blood_donate_number')->default(0);

            // Default Laravel Auth fields
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->timestamps();
        });

        // Keep sessions + password reset tokens unchanged
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
