<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationRequest extends Model
{
    protected $table = 'application_requests'; // Custom table name as per schema
    protected $primaryKey = 'ApplicationID'; // Custom primary key
    public $incrementing = true; // since the primary key is auto-increment
    protected $keyType = 'int'; // the data type of the primary key

    // Assuming you are not using the default timestamp fields created_at and updated_at
    // If you don't use these timestamps, set this property to false
    public $timestamps = false; 
    
    // Mass assignable attributes
    protected $fillable = [
        'UserID',
        'SkillName',
        'CVPath',
        'Status',
        'SubmissionDate',
        'VerificationDate',
    ];

    // Define the relationship with the User (Applicant)
    public function user()
    {
        // Assuming there's a User model properly set up with 'UserID' as the primary key
        return $this->belongsTo('App\Models\User', 'UserID', 'UserID');
    }
    
    // You can add custom date castings if you want to work with dates
    protected $dates = ['SubmissionDate', 'VerificationDate'];

    // If you do decide to use Laravel's timestamps, you could do so by:
    // 1. Updating the schema to include created_at and updated_at fields.
    // 2. Removing the public $timestamps = false; line.
    // 3. If using custom names for these fields, update the `const CREATED_AT` and `const UPDATED_AT`.

    // Add any other model functions as necessary
}