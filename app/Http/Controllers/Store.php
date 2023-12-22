<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Store extends Controller
{
    public function index()
    { 

        return view('webSite.store'); 
    }
}   
