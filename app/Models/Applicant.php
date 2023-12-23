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
    public function getCvDownloadUrlAttribute()
    {
        // Ensure you provide the exact column name where the filename is stored
        if ($this->CV) {
            return route('admin.cvs.download', ['filename' => $this->CV]);
        }
        
        return ''; // or alternatively, you could provide a default or error URL
    }
    
    
    
}