<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Editar Categoria</title>
</head>
<body class="bg-gray-100">

    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Editar Categoria</h2>

        <form action="{{ route('editCategoria', $categorias->id) }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre Categoria</label>
                <input type="text" name="Nombre" value="{{ $categorias->Nombre }}" 
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="Descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="Descripcion" cols="30" rows="10" 
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>{{ $categorias->Descripcion }}</textarea>
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Actualizar Categoria
                </button>
            </div>
        </form>
    </div>

</body>
</html>
