<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($id)
    {
        $moviecontroller = MovieController::find($id);

        if (!$moviecontroller) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

   
        $moviecontroller->load('movies');

        return response()->json($moviecontroller);
    }
}
