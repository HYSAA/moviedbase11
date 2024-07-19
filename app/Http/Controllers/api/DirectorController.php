<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function show($id)
    {
        $director = Director::find($id);
        if (!$director) {
            return response()->json(['error' => 'Director not found'], 404);
        }
        return response()->json($director);
    }
}
