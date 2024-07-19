<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show($id)
    {
        $actor = Actor::find($id);

        if (!$actor) {
            return response()->json(['error' => 'Actor not found'], 404);
        }

   
        $actor->load('movies');

        return response()->json($actor);
    }
}
