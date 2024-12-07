<?php 

namespace App\services;
use App\Models\Categoria;

class CategoriaService{
    public function getCategorias() {
        $categorias = Categoria::all();
        return $categorias;
    }
};