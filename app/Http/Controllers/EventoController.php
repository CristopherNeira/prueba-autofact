<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return Evento::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->descripcion = $request->descripcion;
        $evento->user_id = auth()->id();
        $evento->save();

        return $evento;
    }

    public function update(Request $request, $id)
    {
        $evento = Thought::find($id);
        $evento->descripcion = $request->descripcion;
        $evento->save();

        return $evento;
    }

    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
    }
}
