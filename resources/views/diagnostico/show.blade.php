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
                        @if (Auth::check())
                        <a class="nav-link active h5" aria-current="page"><i
                            class="bi bi-person-circle"></i> {{ Auth::user()->name }}</a>
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

    <section class="content container-fluid mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header m-4">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 id="card_title mb-4" class="text-success">
                                {{ __('Datos que fueron guardados en el diagnóstico:') }}
                            </h5>   
                        </div>
                    </div>

                    <div class="card-body">
                        
                        
                        <div class="form-group mb-2">
                            <strong>Fecha del diagnóstico:</strong>
                            {{ $diagnostico->fechaDiagnostico }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Observaciones:</strong>
                            {{ $diagnostico->observaciones }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Marca:</strong>
                            {{ $diagnostico->marca }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Modelo:</strong>
                            {{ $diagnostico->modelo }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Número de serie:</strong>
                            {{ $diagnostico->numSerie }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Tarjeta madre:</strong>
                            {{ $diagnostico->motherboard }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>RAM:</strong>
                            {{ $diagnostico->ram }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Unidad de almacenamiento:</strong>
                            {{ $diagnostico->unidadAlmacenamiento }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Procesador:</strong>
                            {{ $diagnostico->cpu }}
                        </div>
                        <div class="form-group mb-2">
                            <strong>Tarjeta gráfica:</strong>
                            {{ $diagnostico->gpu }}
                        </div>

                    </div>
                    <div style="display: flex; justify-content: center;">
                        <a class="btn btn-primary" href="{{ route('recepciones.index') }}"><i class="bi bi-arrow-left"></i> {{ __('Volver a la página anterior') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
