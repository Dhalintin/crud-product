<?php

namespace App\Models;
use DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;


    protected $table = 'products_table';
/*
    public static function getuserData(){
        $value = DB::table('products_table')->orderBy('id', '')->get();
        return $value;
    }
*/
}


