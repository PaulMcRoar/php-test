<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{

    public function index()
    {
        return view('location.index', ['locations' => Location::paginate(15) ]);
    }

    public function show(Location $location)
    {
        return view('location.show', ['location' => $location]);
    }
}