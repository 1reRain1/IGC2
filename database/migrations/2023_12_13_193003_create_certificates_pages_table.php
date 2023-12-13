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
        Schema::create('certificates_pages', function (Blueprint $table) {
            $table->increments('CertificateID');
            $table->unsignedInteger('ApplicationID');
            $table->string('CertificatePageTemplate');
            $table->dateTime('IssueDate');
            $table->dateTime('ExpirationDate')->nullable();
            $table->foreign('ApplicationID')->references('ApplicationID')->on('application_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates_pages');
    }
};
