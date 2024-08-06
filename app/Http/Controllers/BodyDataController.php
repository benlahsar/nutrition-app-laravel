<?php

namespace App\Http\Controllers;

use App\Models\BodyData;
use Illuminate\Http\Request;

class BodyDataController extends Controller
{
    function create(Request $request)
    {
        $bodyinfo_user = BodyData::create([
            "goal" => $request->input('goal'),
            "weight" => $request->input('weight'),
            "height" => $request->input('height'),
            "goal_weight" => $request->input('goal_weight'),
            'user_id' => $request->input('user_id'),
            'bmi' => $request->input('bmi')
        ]);

        return response()->noContent();
    }
}
