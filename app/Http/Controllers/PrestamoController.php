<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    public function index()
    {
        // Obtener todos los préstamos
        $prestamos = DB::table('PRESTAMOS')->get();

        return view('prestamos.index', compact('prestamos'));
    }

    public function store(Request $request)
    {
        // Llamar al procedimiento PL/SQL solo con id_libro, como lo definiste
        DB::statement("
            BEGIN
                SP_REGISTRAR_PRESTAMO(:id_libro);
            END;
        ", [
            'id_libro' => $request->input('id_libro')
        ]);

        return redirect()->route('prestamos.index')->with('success', 'Préstamo registrado correctamente.');
    }
}
