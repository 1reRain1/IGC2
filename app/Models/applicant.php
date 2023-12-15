<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'FullName',
        'DateOfBirth',
        'PlaceOfBirth',
        'PhoneNumber',
        'Email',
        'SkillName',
        'CV'
    ];

    // Applicant has many ApplicationRequests
    public function applicationRequests()
    {
        return $this->hasMany(ApplicationRequest::class, 'UserID');
    }
}
