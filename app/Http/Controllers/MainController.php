<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class MainController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('main.index', compact('cities'));
    }
}
