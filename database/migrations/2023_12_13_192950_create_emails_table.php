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
        Schema::create('email', function (Blueprint $table) {
            $table->increments('EmailID');
            $table->text('EmailTemplate');
            $table->string('CertificateFile');
            $table->dateTime('IssueDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_sents');
    }
};
