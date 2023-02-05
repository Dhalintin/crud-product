<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
     //Index Route
     Public function index() {
        return view('homepage');
    }
}
