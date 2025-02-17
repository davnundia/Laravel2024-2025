<?php

namespace App\Http\Controllers;

use App\Models\LibrosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LibrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $libros = LibrosModel::all();
        return view('show', compact('libros'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'paginas' => 'required|integer',
            'editorial' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);
    
        LibrosModel::create($validatedData);

        return redirect()->route('show');
    }

    public function delete($id)
{
    $libro = LibrosModel::findOrFail($id);
    $libro->delete();

    return redirect()->route('show');
}

public function edit($id)
{
    $libro = LibrosModel::findOrFail($id);
    return view('edit', compact('libro'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'paginas' => 'required|integer',
        'editorial' => 'required|string|max:255',
        'autor' => 'required|string|max:255',
    ]);

    $libro = LibrosModel::findOrFail($id);
    $libro->update($request->only(['titulo', 'paginas', 'editorial', 'autor']));

    return redirect()->route('show')->with('success', 'Libro actualizado correctamente.');
}
}
