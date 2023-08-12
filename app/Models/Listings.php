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

    // public function jobApplied(){
    //     return $this->hasMany(User::class ,'id');
    // }

    // public function jobCreated(){
    //     return $this->hasMany(User::class, 'creater_id');
    // }
}
