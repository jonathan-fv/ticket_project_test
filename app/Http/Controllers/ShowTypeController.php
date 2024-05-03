<?php

namespace App\Http\Controllers;

use App\Models\ShowType;
use Illuminate\Http\Request;

class ShowTypeController extends Controller
{
    public function show(ShowType $showtype)
    {
        return response()->json(['name' =>  $showtype->name]);
    }
}
