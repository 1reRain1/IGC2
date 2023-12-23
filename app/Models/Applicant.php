<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
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
        'CV',
        'email_token'
    ];
    
    
    
}