<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ApplicationRequest extends Model
{
    protected $primaryKey = 'ApplicationID';

    protected $fillable = [
        'UserID',
    ];

    // ApplicationRequest belongs to an Applicant
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'UserID');
    }

    // ApplicationRequest has one AcceptedRequest
    public function acceptedRequest()
    {
        return $this->hasOne(AcceptedRequest::class, 'ApplicationID');
    }
}
