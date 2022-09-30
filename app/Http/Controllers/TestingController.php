<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function home($nama)
    {
        return view("home")
            ->with("nama", $nama)
            ->with("waktu", date("H:m:s"));
    }
}
