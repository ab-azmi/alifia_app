<?php

namespace App\Http\Controllers;

use App\Http\Requests\KonselingRequest;
use Illuminate\Http\Request;
use App\Models\Konseling;
use App\Models\Psikolog;
use Illuminate\Support\Facades\Auth;

class KonselingController extends Controller
{
    public function index(){
        // kupindah ke livewire.landing.riwayat
    }
    public function create($id)
    {
        $psikolog = Psikolog::find($id);

        return view('landing.booking', compact('psikolog'));
    }
    public function store(KonselingRequest $request, $id)
    {
        $validatedData = $request->validated();
        $validatedData['client_id'] = auth()->id();

        $psikolog = Psikolog::findOrFail($id);
        $konseling = $psikolog->konseling()->create($validatedData);

        return redirect()->route('landing-riwayat')->with('success', 'Data berhasil disimpan');
    }
}
