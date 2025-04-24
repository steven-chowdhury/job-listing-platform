<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    /** @use HasFactory<\Database\Factories\JobPostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'qualifications',
        'department',
        'location',
        'location_type'
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
