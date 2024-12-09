<?php

namespace App\Http\Controllers;

use App\Models\Odontograma;
use App\Models\Paciente;
use Illuminate\Http\Request;

class OdontogramaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function canvas()
    {
        return view('odontograma.canvas');
    }

    public function display(Request $request)
    {
        return response()->file(storage_path("app/" . $request->path()));
    }

    public function data(Request $request)
    {
        $type = ($request->type == Odontograma::TYPE_EVOLUTION ? Odontograma::TYPE_EVOLUTION : Odontograma::TYPE_INITIAL);
        $patient = Paciente::query()->where('dni', $request->dni)->first();
        $odontogram = $patient->odontograms->where('type', $type)->first();
        if (!$odontogram) {
            $odontogram = $patient->odontograms()->create([
                'type' => $type,
                'date' => now(),
                'payload' => Odontograma::generatePayload(),
            ]);
        }
        return response()->json($odontogram);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Odontograma $odontograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Odontograma $odontograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Odontograma $odontograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Odontograma $odontograma)
    {
        //
    }
}
