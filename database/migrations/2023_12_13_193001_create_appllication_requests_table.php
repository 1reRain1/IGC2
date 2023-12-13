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
        Schema::create('application_requests', function (Blueprint $table) {
            $table->increments('ApplicationID');
            $table->unsignedInteger('UserID');
            $table->string('SkillName');
            $table->string('CVPath');
            $table->enum('Status', ['Pending', 'Verified', 'Rejected']);
            $table->dateTime('SubmissionDate');
            $table->dateTime('VerificationDate')->nullable();
            $table->foreign('UserID')->references('UserID')->on('applicants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appllication_requests');
    }
};
