<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">

        <article class="space-y-6 mb-6">
            <a href="{{ route('proveedor') }}" class="text-blue-600 hover:text-blue-800">
                <section class="border p-4 rounded-md hover:bg-gray-100">
                    <h2 class="text-xl font-semibold">Crear Proveedor</h2>
                </section>
            </a>

            <a href="{{ route('categoria') }}" class="text-blue-600 hover:text-blue-800">
                <section class="border p-4 rounded-md hover:bg-gray-100">
                    <h2 class="text-xl font-semibold">Crear Categoria</h2>
                </section>
            </a>
        </article>

        <form action="{{ route('add_producto') }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <label for="product" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                <input type="text" name="product" id="product" placeholder="Nombre del producto"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio del Producto</label>
                <input type="number" name="price" id="price" placeholder="Precio del producto"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock del Producto</label>
                <input type="number" name="stock" id="stock" placeholder="Stock del producto"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="id_categoria" class="block text-sm font-medium text-gray-700">Seleccionar Categoria</label>
                <select name="id_categoria" id="id_categoria"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    <option value="" disabled selected>Seleccionar Categoria</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->Nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="id_proveedor" class="block text-sm font-medium text-gray-700">Seleccionar Proveedor</label>
                <select name="id_proveedor" id="id_proveedor"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    <option value="" disabled selected>Seleccionar Proveedor</option>
                    @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full py-3 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Agregar Producto
                </button>
            </div>
        </form>

        <table class="min-w-full mt-6 bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Id Producto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nombre Producto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Precio</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Stock</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fecha</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Acciones</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($products as $producto)
                <tr>
                    <td class="px-6 py-4">{{ $producto->id }}</td>
                    <td class="px-6 py-4">{{ $producto->product }}</td>
                    <td class="px-6 py-4">{{ $producto->price }}</td>
                    <td class="px-6 py-4">{{ $producto->stock }}</td>
                    <td class="px-6 py-4">{{ $producto->created_at->format('Y-m-d H:i:s') }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('editProducto.view', $producto->id) }}"
                            class="text-yellow-500 hover:text-yellow-700">Editar</a>
                        <span class="mx-2">|</span>
                        <a href="{{ route('deleteProducto', $producto->id) }}"
                            class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
