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

        return $link;
    }

    public function view(Request $request, $url)
    {
        $link = Link::where('code', $url)->first();

        // Return 404 if you cant find the url
        if ($link == null) {
            return abort(404);
        }

        $link->hits = $link->hits + 1;
        $link->save();

        return redirect()->to($link->url, 301);
    }
}
