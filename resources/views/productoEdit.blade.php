<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Editar Producto</title>
</head>

<body class="bg-gray-100">

    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Editar Producto</h2>

        <form action="{{ route('editProducto', $producto->id) }}" method="POST" class="space-y-6">
            @csrf

            <div class="mb-4">
                <label for="product" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                <input type="text" name="product" id="product" value="{{ $producto->product }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" name="price" id="price" value="{{ $producto->price }}" min="0"
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" id="stock" value="{{ $producto->stock }}" 
                    class="mt-2 w-full p-3 border border-indigo-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <button type="submit" 
                    class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Editar Producto
                </button>
            </div>
        </form>
    </div>

</body>

</html>
