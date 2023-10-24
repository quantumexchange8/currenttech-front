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
        Schema::create('user_resumes', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('resume')->nullable();
            $table->string('message')->nullable();
            $table->string('pos_system')->nullable();
            $table->string('chip')->nullable();
            $table->string('web_app')->nullable();
            $table->string('web_3')->nullable();
            $table->string('ctrader_type')->nullable();
            $table->string('career_type')->nullable();
            $table->string('intern')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_resumes');
    }
};
