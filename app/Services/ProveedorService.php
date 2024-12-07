<?php 

namespace App\services;
use App\Models\Proveedor;

class ProveedorService{
    public function getProveedor() {
        $Proveedor = Proveedor::all();
        return $Proveedor;
    }
};