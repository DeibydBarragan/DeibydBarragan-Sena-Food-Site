<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>Factura</title>
</head>
<body>
    <h3 style="font-family: Arial;">Pedido #{{ $pedido->id }}</h3>
    <h5 style="font-family: Verdana;">Id del usuario: {{ $pedido->id_usuario }}</h5>
    <h5 style="font-family: Verdana;">Nombre del usuario: {{ $pedido->Usuario->Nombre }} {{ $pedido->Usuario->Apellidos }}</h5>
    <h5 style="font-family: Verdana;">Fecha: {{ $pedido->Fecha }}</h5>
    <h5 style="font-family: Verdana;">Método de pago: {{ $pedido->Metodopago->Metodo }}</h5>
    <h4 style="font-family: Verdana;">Productos </h4>
    @foreach ($productosPedido as $producto)
    
        <h5 style="font-family: Verdana;">{{ $producto->Productos->Nombre }}</h5>
        <h5 style="font-family: Verdana;">${{ $producto->Productos->Precio }} x {{ $producto->Cantidad }}= ${{ $producto->Productos->Precio * $producto->Cantidad }}</h5>

    @endforeach
    <h4 style="font-family: Verdana;">Total: ${{ $pedido->Precio }} </h4>

    <footer class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">© 2022 SENA FOOD-SITE, Inc</p>

          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="https://www.youtube.com/watch?v=mCdA4bJAGGk" class="nav-link px-2 text-muted">Hecho por los pibes</a></li>
          </ul>
        </div>
    </footer>

</body>
</html>