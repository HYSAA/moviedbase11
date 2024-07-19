<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rating extends Controller
{
    public function show($id)
    {
        $rating = Rating::find($id);
        if (!$rating) {
            return response()->json(['error' => 'Ratings not found'], 404);
        }
        return response()->json($rating);
    }
}
