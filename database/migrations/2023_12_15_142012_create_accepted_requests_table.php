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
        Schema::create('accepted_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('ApplicationID');
            $table->unsignedBigInteger('UserID');
            $table->timestamps();

            $table->primary('ApplicationID');

            $table->foreign('ApplicationID')->references('ApplicationID')->on('application_requests')
                ->onDelete('cascade');

            $table->foreign('UserID')->references('UserID')->on('applicants')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_requests');
    }
};
