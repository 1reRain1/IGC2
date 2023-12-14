<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Applicant extends Model
{
    // Set the table name if it is not the plural of model's name; not needed here as Laravel will automatically assume 'applicants'
    // However, for the purpose of demonstration, it's fine to set it explicitly.
    protected $table = 'applicants';
    public $incrementing = true; // since the primary key is auto-increment

    // Set the primary key if it is different from the default 'id'
    protected $primaryKey = 'UserID'; 

    // Tell Eloquent that the primary key is not incremental if needed
    // In this case it is incremental so we don't need to set it
    // public $incrementing = true;

    // Tell Eloquent what the key type is (e.g., 'int', 'string')
    protected $keyType = 'int'; 

    // Disable auto managing of timestamps if there's no created_at and updated_at columns
    public $timestamps = false;

    // Define which attributes can be mass-assigned
    protected $fillable = [
        'FullName',
        'DateOfBirth',
        'PlaceOfBirth',
        'PhoneNumber',
        'Email',
    ];

    // No need to set $casts for 'DateOfBirth' as date because it's automatically cast when retrieved due to being a 'date' column in the database
}
