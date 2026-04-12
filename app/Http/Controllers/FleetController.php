<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;
use Illuminate\Support\Facades\Auth;

class FleetController extends Controller
{
    public function index()
    {
        $ships = Ship::all();
        return view('fleet', compact('ships'));
    }
}
