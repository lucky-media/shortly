<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function store(Request $request)
    {
        // Validate the inputed data
        $request->validate([
            'url' => 'required|url',
        ]);

        // Store the data

        // Return new link
    }
}
