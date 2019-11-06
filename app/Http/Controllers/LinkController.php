<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function store(Request $request)
    {
        // Validate the inputed data
        $request->validate([
            'url' => 'required|url',
        ]);

        // Create the Link
        $link = Link::create([
            'url' => $request->url,
            'code' => substr(md5(uniqid(rand(), true)), 0, 6),
        ]);

        return view('home.show', compact('link'));
    }

    public function view(Link $link)
    {
        // Abort if not found.
        abort_if($link == null, 404);

        $link->increment('hits');
        $link->save();

        return redirect()->to($link->url, 301);
    }

    public function show(Link $link)
    {
        // Abort if not found.
        abort_if($link == null, 404);

        return $link;
    }
}
