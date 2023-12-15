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
            $table->bigIncrements('ApplicationID');
            $table->unsignedBigInteger('UserID');
            $table->timestamps();
            $table->boolean('acceptedRequest');
            $table->foreign('UserID')->references('UserID')->on('applicants')
                ->onDelete('cascade');
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
