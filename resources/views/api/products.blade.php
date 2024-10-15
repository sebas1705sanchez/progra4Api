<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    @if($products)
        <ul>
            @foreach($products as $product)
                <li>
                    <h2>{{ $product['title'] }}</h2>
                    <p>Precio: ${{ $product['price'] }}</p>
                    <p>Descripción: {{ $product['description'] }}</p>

                    <!-- Mostrar información de la categoría -->
                    <p>Categoría: {{ $product['category']['name'] }}</p>
                    <img src="{{ $product['category']['image'] }}" alt="{{ $product['category']['name'] }}" width="100">

                    <!-- Mostrar imágenes del producto -->
                    <div>
                        <h3>Imágenes del Producto:</h3>
                        @foreach($product['images'] as $image)
                            <img src="{{ $image }}" alt="{{ $product['title'] }}" width="150" style="margin-right: 10px;">
                        @endforeach
                    </div>
                </li>
                <hr>
            @endforeach
        </ul>
    @else
        <p>No se encontraron productos.</p>
    @endif
</body>
</html>
