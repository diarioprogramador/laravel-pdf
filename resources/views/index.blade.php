<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 PDF</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Lista de productos</h2>
            </div>
            <div class="col-md-6">
                <div class="mb-4 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ URL::to('/producto/pdf') }}">Convertir a PDF</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <caption>Lista de productos</caption>
                    <thead>
                      <tr>
                        <th scope="col">SKU</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{ $producto->sku }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->descripcion }}</td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
