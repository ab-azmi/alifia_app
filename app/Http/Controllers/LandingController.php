<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //if user is authenticated, get active konseling
        $konselings = collect();
        if (auth()->check()) {
            $konselings = auth()->user()->konselingAsClient()->where('berlangsung', true)->with('psikolog', 'client')->get();
        }

        return view('landing.index', compact('konselings'));
    }
}
