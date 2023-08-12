<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'recruiter_id',
        'text',
        'cv_path',
        'listing_id',
        'job_tittle'
    ];

    // public function userApplicant()
    // {
    //     return $this->belongsTo(User::class, 'id');
    // }

    // public function listingCreator()
    // {
    //     return $this->belongsTo(Listings::class, 'creater_id');
    // }
    // public function listing()
    // {
    //     return $this->belongsTo(Listings::class, 'id');
    // }
}
