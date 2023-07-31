<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listings extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'tags',
        'company',
        'location',
        'website',
        'email',
        'description'

    ];

    public static function getAll()
    {
        return DB::table('listings')->get();
    }


    public static function find($id)
    {
        $listings = self::getAll();
        foreach($listings as $list){
            if($list->id == $id){
                return [$list];
            }
        }
    }
}

