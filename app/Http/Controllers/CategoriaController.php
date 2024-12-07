<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categoria', compact('categorias'));
    }
    public function createCategorias(Request $request) {
        $validate = $request->validate([
            'Nombre' => 'required|unique:categorias|max:255',
            'Descripcion' => 'required' 
        ]);
        Categoria::create($validate);
        return redirect()->route('categoria')->with('status', 'actualizado con exito');
    }

    public function editCategorias(Request $request){
        $category = $request->validate([
            'Nombre' => 'required|max:255',
            'Descripcion' => 'required'
        ]);
        Categoria::where('id', $request->id)->update($category);
        return redirect()->route('categoria')->with('status', 'actualizado con exito');
    }

    public function editCategoriasView($id){
        $categorias = Categoria::find($id);
        return view('categoriaEdit', compact('categorias'));
    }

    public function deleteCategorias($id){
        Categoria::destroy($id);
        return redirect()->route('categoria')->with('status', 'Eliminado con exito');
    }
}
