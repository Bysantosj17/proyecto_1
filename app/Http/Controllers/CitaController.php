<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CitaController extends Controller
{

    public function index_t()
    {
        $citas = Cita::paginate(10);

        return view('citas.citas', ['citas' => $citas]);
    }

    public function crear_cita()
    {

        return view('citas.crear_cita', ['cita' => new Cita]);
    }

    public function store(Request $request)
    {
        $cita = new Cita();

        $request->validate([
            'tatoos' => 'required|image'
        ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos/citas');

        $url = Storage::url($tatoos);

        $cita->name = $request->input('name');
        $cita->descripcion = $request->input('descripcion');
        $cita->tel = $request->input('tel');
        $cita->email = $request->input('email');
        $cita->tatoos = $url;
        $cita->save();

        return to_route('citas.citas')->with('status', '¡Cita creada exitosamente!');
    }

    public function show_t(Cita $cita)
    {
        return view('citas.show_t', ['cita' => $cita]);
    }

    public function edit_t(Cita $cita)
    {
        return view('citas.edit_t', ['cita' => $cita]);
    }

    public function update_t(Request $request, Cita $cita)
    {
        $request->validate([
            'tatoos' => 'required|image',
            'tel' => 'required|max:10'
        ]);

        $tatoos = $request->file('tatoos')->store('public/tatoos/citas');

        $url = Storage::url($tatoos);

        $cita->name = $request->input('name');
        $cita->descripcion = $request->input('descripcion');
        $cita->tel = $request->input('tel');
        $cita->email = $request->input('email');
        $cita->tatoos = $url;
        $cita->update();

        session()->flash('status', 'cita actualizada');

        return to_route('cita.show_t', $cita)->with('status', '¡Cita acrualizada!');
    }

    public function destroy_t(Cita $cita)
    {
        $cita->delete();

        return to_route('citas.citas')->with('status', 'Cita eliminada!');
    }
}
