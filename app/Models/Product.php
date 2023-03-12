<?php

namespace App\Models;

use App\Models\User;
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
        return $this->belongsTo(User::class);
    }
/*
    public static function getuserData(){
        $value = DB::table('products_table')->orderBy('id', '')->get();
        return $value;
    }
*/
}
