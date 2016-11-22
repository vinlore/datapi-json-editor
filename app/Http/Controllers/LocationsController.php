<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
    private $locations;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_location()
    {
        $newLocation = [
            "name" => null,
            "address" => null,
            "address2" => null,
            "lat" => null,
            "lng" => null,
            "phone" => null,
            "phone2" => null,
            "email" => null,
            "hoursMT" => null,
            "hoursSa" => null,
            "hoursSu" => null
        ];

        array_push($this->locations, $newLocation);
    }

    public function index()
    {
        $file = file_get_contents("locations.json", true);
        $locations = json_decode($file, true);

        return view('locations.index', ['locations' => $locations]);
    }

    public function show($id)
    {
        $file = file_get_contents("locations.json", true);
        $locations = json_decode($file, true);

        return view('locations.show', ['locations' => $locations, 'location' => $locations[$id]]);
    }
}
