<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return response()->json(['name' =>  $user->name, 'email' => $user->email]);

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->to('/')->with('Succès', 'Utilisateur supprimer avec succès');
    }
}
