<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ApplicationRequest extends Model
{
    protected $primaryKey = 'ApplicationID';

    protected $fillable = [
        'UserID',
        'accepted'
    ];

    // ApplicationRequest belongs to an Applicant
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'UserID');
    }
}
