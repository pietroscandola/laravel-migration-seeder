<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    $trains = Train::all();  
    return view('home', compact('trains'));
}
