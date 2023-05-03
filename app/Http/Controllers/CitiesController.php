<?php

namespace App\Http\Controllers;

use App\Models\City;
//use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function city($selected)
    {
        // проверим есть ли такой город
        $city = City::where('name', $selected)->first();
        if(!$city){
            abort('404');
        }else{
            session(['city' => $city->name]);
//            dump(session('city'));
            $cities = City::all();
            return view('main.index', compact('cities', 'selected'));
        }

    }
}
