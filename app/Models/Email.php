<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Email extends Model
{
    // Table name is set explicitly, corresponds to the 'email' table in your database
    protected $table = 'emails';

    // The primary key is set to 'EmailID' according to your schema
    protected $primaryKey = 'EmailID';

    // Indicates if the model should be timestamped. 
    // False because there are no created_at and updated_at columns in your table
    public $timestamps = false;

    // The attributes that are mass assignable
    // Only the fields that are allowed to be filled through mass assignment should be listed here
    protected $fillable = [
        'EmailTemplate',
        'CertificateFile',
        'IssueDate'
    ];

    // The attributes that should be cast to native types
    // IssueDate is being cast to 'datetime' for convenient date handling
    protected $casts = [
        'IssueDate' => 'datetime'
    ];
}
