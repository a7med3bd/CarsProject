<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCar extends Controller
{
    public function addcar()
    {
        return view('cars');
    }
}
