<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Editar Proveedor</title>
</head>

<body class="bg-gray-100">

    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Editar Proveedor</h2>

        <form action="{{ route('editProveedor', $proveedor->id) }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre Proveedor</label>
                <input type="text" name="nombre" id="nombre" value="{{ $proveedor->nombre }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección Proveedor</label>
                <input type="text" name="direccion" id="direccion" value="{{ $proveedor->direccion }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono Proveedor</label>
                <input type="tel" name="telefono" id="telefono" value="{{ $proveedor->telefono }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Proveedor</label>
                <input type="email" name="email" id="email" value="{{ $proveedor->email }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div class="mb-4">
                <label for="contacto" class="block text-sm font-medium text-gray-700">Contacto Proveedor</label>
                <input type="tel" name="contacto" id="contacto" value="{{ $proveedor->contacto }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="4" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ $proveedor->descripcion }}</textarea>
            </div>

            <div class="mb-6">
                <button type="submit" 
                    class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Editar Proveedor
                </button>
            </div>
        </form>
    </div>

</body>

</html>
