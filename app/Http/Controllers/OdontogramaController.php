<?php

namespace App\Http\Controllers;

use App\Models\Odontograma;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $time = time();
        $odontogram = Odontograma::query()->findOrFail($request->id);
        $payload = $odontogram->payload;
        $payload = collect($payload)->map(function ($item) use ($odontogram, $time, $request) {
            $item['findingText'] = $request->findings[$item['number']] ?? null;

            if (!isset($request->types[$item['number']])) return $item;

            $item['findingTypes'] = json_decode($request->types[$item['number']]);
            if ($request->paths && isset($request->paths[$item['number']]))
                $item['canvasPaths'] = json_decode($request->paths[$item['number']]);
            if (isset($request->images[$item['number']])) {
                if (($url = $odontogram->routeTooth($item)))
                    Storage::disk()->put($url, file_get_contents($request->images[$item['number']]));
            }
            else $url = null;
            $item['url'] = $url ? "$url?t=$time" : null;
            return $item;
        });
        $odontogram->update(compact('payload') + [
                'observations' => $request->observations ?? '',
                'specifications' => $request->specifications ?? '',
                'date' => Carbon::parse($request->date),
            ]);
        return response()->json($odontogram);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Odontograma $odontograma)
    {
        //
    }
}
