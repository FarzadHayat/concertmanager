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
        Schema::create('email_thread', function (Blueprint $table) {
            $table->id();
            $table->integer('tenant_id');
            $table->integer('email_account_id');
            $table->string('api_id'); // gmail_api id to retreive email details - thread-root
            $table->string('subject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_thread');
    }
};
