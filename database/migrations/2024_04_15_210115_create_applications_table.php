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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('biography');
            $table->string('type');
            $table->string('status')->default('pending');
            $table->date('interview_date')->nullable();
            $table->longText('interview_notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
