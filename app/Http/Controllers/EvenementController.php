<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function show(Evenement $evenement)
    {
        return response()->json(['name' =>  $evenement->name]);
    }

    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->to('/evenements')->with('Succès', 'La ville est supprimer avec succès');
    }
}
