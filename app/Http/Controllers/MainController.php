<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class MainController extends Controller
{
    public function index()
    {
        $city = session('city');
        if($city){
            return redirect(null, 301)->route('cities.city', [$city]);
        }
        $cities = City::all();
        return view('main.index', compact('cities'));
    }
}
