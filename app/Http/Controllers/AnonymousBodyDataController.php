<?php

namespace App\Http\Controllers;

use App\Models\AnonymousBodyData;
use Illuminate\Http\Request;

class AnonymousBodyDataController extends Controller
{
    function create(Request $request)
    {
        AnonymousBodyData::create([
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'bmi' => $request->input('bmi'),
        ]);
        return response()->json(['message' => 'done']);
    }
}
