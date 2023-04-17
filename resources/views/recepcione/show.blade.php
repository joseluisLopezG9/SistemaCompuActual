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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>compuActual - recepción/mostrar</title>
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
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
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

    <section class="content container-fluid m-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header m-4">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 id="card_title m-2" class="text-success">
                                {{ __('Datos que fueron guardados en la recepción:') }}
                            </h5>   
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group mb-2">
                            <strong>Marca:</strong>
                            {{ $recepcione->marca }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Modelo:</strong>
                            {{ $recepcione->modelo }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Número de serie:</strong>
                            {{ $recepcione->numSerie }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Caracteristicas Fisicas:</strong>
                            {{ $recepcione->caracteristicasFisicas }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Caracteristicas Internas:</strong>
                            {{ $recepcione->caracteristicasInternas }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Accesorios:</strong>
                            {{ $recepcione->accesorios }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Contraseña del equipo:</strong>
                            {{ str_repeat('*', strlen($recepcione->claveAcceso)) }}
                          </div>
                        <div class="form-group mb-2">
                            <strong>Servicio que se va a ofrecer:</strong>
                            {{ $recepcione->servicio }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Nombre del cliente:</strong>
                            {{ $recepcione->name }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Teléfono del cliente:</strong>
                            {{ $recepcione->telefono }}
                        </div>

                    </div>
                    <div style="display: flex; justify-content: center;">
                        <a class="btn btn-primary" href="{{ route('recepciones.index') }}"><i class="bi bi-arrow-left"></i> {{ __('Volver a la página anterior') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
