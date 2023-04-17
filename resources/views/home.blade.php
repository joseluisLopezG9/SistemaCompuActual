<!doctype html>
<html lang="es">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>compuActual - home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1574cf;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #0c0c0c;">
                <img src="https://cdn-icons-png.flaticon.com/512/1802/1802913.png"
                     alt="" width="50" height="50">compuActual | El equipo más moderno
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @if (Auth::check() && Auth::user() instanceof App\Models\User)
                        <a class="nav-link active h5" aria-current="page"><i
                            class="bi bi-person-circle"></i> {{ Auth::user()->name }} ({{ Auth::user()->role }}) </a>
                        @else
                        @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h5" aria-current="page" href="{{ url('/welcome') }}"><i
                                class="bi bi-house-door-fill"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active h5" aria-current="page" href="{{ url('/logout') }}"><i
                            class="bi bi-box-arrow-right"></i> Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row g-2 justify-content-center m-2">
        <div class="col-md-10">
            <div class="card align-items-center text-primary border-0" style="font-size: 2rem">{{ __('SOPORTE TÉCNICO') }}</div>
            <div class="card align-items-center m-2 border-0">
                <label class="mb-0" style="font-size:14pt">Bienvenid@ aquí se encuentran los puntos que se llevan a cabo para realizar una reparación.</label>
                <img src="https://cdn.shopify.com/s/files/1/0613/0076/9014/products/SOPORTEMENSUAL_65176124-3126-4bf8-b517-3d31ff398555_1024x1024.png?v=1648210716"
                    alt="" class="card-img-top w-50 img-fluid rounded">
            
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col">
                    <img src="https://cdn-icons-png.flaticon.com/512/2262/2262036.png" width="150" height="150" class="card-img-top" alt="...">
                    <h5 class="card-title text-center"><a href="{{ route('recepciones.index') }}">Recepción</a></h5>
                </div>
                <div class="col">
                    <img src="https://www.diagnosticolondres.com/wp-content/uploads/2022/10/icono-cardiologia-diagnostico-londres-blue-350-150x150.png" width="100" height="150" class="card-img-top" alt="...">
                    <h5 class="card-title text-center"><a href="{{ route('diagnosticos.index') }}"">Diagnóstico</a></h5>
                </div>
                <div class="col">
                    <img src="https://cdn-icons-png.flaticon.com/512/2038/2038012.png" width="150" height="150" class="card-img-top" alt="...">
                    <h5 class="card-title text-center"><a href="#">Comunicación</a></h5>
                </div>
                
                <div class="col">
                        <img src="https://cdn-icons-png.flaticon.com/512/5520/5520971.png" width="150" height="150" class="card-img-top" alt="...">
                        <h5 class="card-title text-center"><a href="{{ url('/register') }}">Usuarios</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>

    
    

