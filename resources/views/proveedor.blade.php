<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Proveedores</title>
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800">
            <h2 class="text-2xl font-semibold mb-4">Crear Producto</h2>
        </a>

        <form action="{{ route('add_proveedor') }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre Proveedor</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Proveedor" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección Proveedor</label>
                <input type="text" name="direccion" id="direccion" placeholder="Dirección Proveedor" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono Proveedor</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono Proveedor" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Proveedor</label>
                <input type="email" name="email" id="email" placeholder="Email Proveedor" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="contacto" class="block text-sm font-medium text-gray-700">Contacto Proveedor</label>
                <input type="tel" name="contacto" id="contacto" placeholder="Contacto Proveedor" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="4" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <div class="mb-6">
                <button type="submit" 
                    class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Crear Proveedor
                </button>
            </div>
        </form>

        <table class="min-w-full mt-6 bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Id Proveedor</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Dirección</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Teléfono</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Contacto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($proveedores as $proveedor)
                <tr>
                    <td class="px-6 py-4">{{ $proveedor->id }}</td>
                    <td class="px-6 py-4">{{ $proveedor->nombre }}</td>
                    <td class="px-6 py-4">{{ $proveedor->direccion }}</td>
                    <td class="px-6 py-4">{{ $proveedor->telefono }}</td>
                    <td class="px-6 py-4">{{ $proveedor->email }}</td>
                    <td class="px-6 py-4">{{ $proveedor->contacto }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('editProveedor.view', $proveedor->id) }}" 
                            class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        <span class="mx-2">|</span>
                        <a href="{{ route('deleteProveedor', $proveedor->id) }}" 
                            class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
