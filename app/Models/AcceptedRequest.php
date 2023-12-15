<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    // Assuming AcceptedRequest uses ApplicationID as a primary key, which is unconventional.
    protected $primaryKey = 'ApplicationID';
    public $incrementing = false;

    protected $fillable = [
        'ApplicationID',
        'UserID',
    ];

    // AcceptedRequest belongs to an ApplicationRequest
    public function applicationRequest()
    {
        return $this->belongsTo(ApplicationRequest::class, 'ApplicationID');
    }

    // AcceptedRequest belongs to an Applicant
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'UserID');
    }
}
