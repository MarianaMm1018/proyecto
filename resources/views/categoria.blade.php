<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Categoria</title>
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">
            <h2 class="text-2xl font-semibold mb-4">Crear Producto</h2>
        </a>
        
        <form action="{{ route('add_categoria') }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre Categoria</label>
                <input type="text" name="Nombre" placeholder="Nombre Categoria" 
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="Descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="Descripcion" placeholder="Descripción de la categoria" 
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" cols="30" rows="5"></textarea>
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Crear Categoria
                </button>
            </div>
        </form>

        <table class="min-w-full mt-6 bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Id Categoria</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre Categoria</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Descripcion Categoria</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($categorias as $categoria)
                    <tr>
                        <td class="px-6 py-4">{{ $categoria->id }}</td>
                        <td class="px-6 py-4">{{ $categoria->Nombre }}</td>
                        <td class="px-6 py-4">{{ $categoria->Descripcion }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('editCategoria.view', $categoria->id) }}" 
                               class="text-yellow-500 hover:text-yellow-700">Editar</a>
                            <span class="mx-2">|</span>
                            <a href="{{ route('deleteCategoria', $categoria->id) }}" 
                               class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
