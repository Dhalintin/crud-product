<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price'
    ];

    public function User(){
        return $this->belongsTo('App\Models\User');
    }
/*
    public static function getuserData(){
        $value = DB::table('products_table')->orderBy('id', '')->get();
        return $value;
    }
*/
}
