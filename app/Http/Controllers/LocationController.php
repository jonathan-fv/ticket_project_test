<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show(Location $location)
    {
        return response()->json(['name' =>  $location->name]);
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->to('/locations')->with('Succès', 'La ville est supprimer avec succès');
    }
}
