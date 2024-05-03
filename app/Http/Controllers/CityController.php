<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show(City $city)
    {
        return response()->json(['name' =>  $city->name]);
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->to('/cities')->with('Succès', 'La ville est supprimer avec succès');
    }
}
