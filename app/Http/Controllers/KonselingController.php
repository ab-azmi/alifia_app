<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konseling;
use App\Models\Psikolog;

class KonselingController extends Controller
{
    public function index(){
        $konseling = Konseling::latest()->get();

        return view('landing.riwayat', compact('konseling'));
    }
    public function create($id)
    {
        $psikolog = Psikolog::find($id);

        return view('landing.booking', compact('psikolog'));
    }
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'category' => 'required',
            'date' => 'nullable',
            'time' => 'nullable',
            'description' => 'required',
        ]);

        $validatedData['psikolog_id'] = $id;

        $psikolog = Psikolog::findOrFail($id);
        $konseling = $psikolog->konseling()->create($validatedData);

        return redirect()->route('landing-riwayat')->with('success', 'Data berhasil disimpan');
    }
}
