<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $now = now();
        $trains = Train::whereDate('departure_time', $now)->get();
        dd($now);
        return view('home', compact('trains'));
    }
    public function contacts()
    {
        return view('contacts',);
    }
    public function about()
    {
        return view('about',);
    }
}
