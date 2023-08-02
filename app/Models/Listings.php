<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',  
        'creater_id',
        'description',
        'tags',
        'company',
        'location',
        'website',
        'email',
        'description'

    ];
    public function userTable()
    {
        return $this->belongsTo(User::class, 'creater_id');
    }
}
