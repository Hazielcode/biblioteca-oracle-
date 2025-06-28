<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    public function index()
    {
        // Obtiene libros desde Oracle
        $libros = DB::table('LIBROS')->get();
        return view('libros.index', compact('libros'));
    }

    public function store(Request $request)
    {
        // Inserta un libro en Oracle
        DB::table('LIBROS')->insert([
            'TITULO'    => $request->input('titulo'),
            'AUTOR'     => $request->input('autor'),
            'CATEGORIA' => $request->input('categoria'),
            'STOCK'     => $request->input('stock'),
        ]);

        return redirect()->route('libros.index')->with('success', 'Libro registrado!');
    }

    public function destroy($id)
    {
        // Elimina un libro por su ID_LIBRO
        DB::table('LIBROS')->where('ID_LIBRO', $id)->delete();

        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente!');
    }
}
