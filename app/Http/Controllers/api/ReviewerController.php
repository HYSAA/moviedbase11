<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Reviewer extends Controller
{
    protected $reviewer;

    public function __construct(Reviewer $reviewer)
    {
        $this->reviewer = $reviewer;
    }

    public function show($id)
    {
        $reviewer = Reviewer::find($id);
        if (!$reviewer) {
            return response()->json(['error' => 'reviewer  not found'], 404);
        }
        return response()->json($reviewer);
    }

    public function store(Request $request)
    {
     
        $this->ratingService->createRating($request->all());

        return redirect()->route('dashboard');
    }
}
