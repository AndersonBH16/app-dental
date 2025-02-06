<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('citas.index', compact('pacientes'));
    }

    public function getAllCitas()
    {
        $citas = Cita::all();

        $eventos = $citas->map(function ($cita) {
            return [
                'id'          => $cita->id,
                'title'       => $cita->titulo,
                'start'       => "{$cita->fecha}T{$cita->hora_inicio}",
                'end'         => "{$cita->fecha}T{$cita->hora_fin}",
                'description' => $cita->descripcion,
                'paciente_id' => $cita->paciente_id,
                'paciente'    => $cita->paciente ? "{$cita->paciente->nombre} {$cita->paciente->apellido_paterno} {$cita->paciente->apellido_materno}" : null,
            ];
        });

        return response()->json($eventos);
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
//        $request->validate([
//            'title'         => 'required|string|max:255',
//            'description'   => 'nullable|string',
//            'fecha'         => 'required|date',
//            'hora_inicio'   => 'required|date_format:H:i',
//            'duracion'      => 'required|integer',
//            'paciente_id'   => 'required|exists:pacientes,id',
//        ]);

        try {
            $duracion = (int) $request->duracion;
            $horaFin = Carbon::parse($request->hora_inicio)->addMinutes($duracion)->format('H:i');

            Cita::create([
                'titulo'        => $request->title,
                'descripcion'   => $request->description,
                'fecha'         => $request->fecha,
                'hora_inicio'   => $request->hora_inicio,
                'hora_fin'      => $horaFin,
                'paciente_id'   => $request->paciente_id,
            ]);

            return response()->json(['success' => true, 'message' => 'Cita creada exitosamente']);
        }catch (\Exception $e){
            echo $e->getMessage();
            return response()->json(['success' => false, 'message' => 'Error al crear la cita.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'fecha'         => 'required|date',
            'hora_inicio'   => 'required|date_format:H:i',
            'duracion'      => 'required|integer',
            'paciente_id'   => 'required|exists:pacientes,id',
        ]);

        try {
            $cita = Cita::findOrFail($id);
            $duracion = (int) $request->duracion;
            $horaFin = Carbon::parse($request->hora_inicio)->addMinutes($duracion)->format('H:i');

            $cita->update([
                'titulo'        => $request->title,
                'descripcion'   => $request->description,
                'fecha'         => $request->fecha,
                'hora_inicio'   => $request->hora_inicio,
                'hora_fin'      => $horaFin,
                'paciente_id'   => $request->paciente_id,
            ]);

            return response()->json(['message' => 'Cita actualizada exitosamente.'], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Hubo un error al actualizar la cita.'], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
