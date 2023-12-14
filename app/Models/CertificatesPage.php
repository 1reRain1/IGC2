<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificatePage extends Model
{
    // The table associated with the model.
    protected $table = 'certificates_pages';

    // The primary key associated with the table.
    protected $primaryKey = 'CertificateID';

    // Indicates if the IDs are auto-incrementing.
    public $incrementing = true;

    // The data type of the auto-incrementing ID.
    protected $keyType = 'int';

    // Disable auto managing of timestamps (created_at and updated_at)
    public $timestamps = false;

    // The attributes that are mass assignable.
    protected $fillable = [
        'ApplicationID',
        'CertificatePageTemplate',
        'IssueDate',
        'ExpirationDate',
    ];

    // The attributes that should be cast.
    protected $casts = [
        'IssueDate' => 'datetime',
        'ExpirationDate' => 'datetime',
    ];

    /**
     * Relationship: each certificate page belongs to an application.
     */
    public function applicationRequest()
    {
        return $this->belongsTo(ApplicationRequest::class, 'ApplicationID', 'ApplicationID');
    }
}