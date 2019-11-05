<?php

namespace App\Http\Controllers;

class HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('home.index');
    }

}
