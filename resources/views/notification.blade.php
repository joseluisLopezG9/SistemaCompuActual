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

    <title>compuActual - notificaciones</title>

<script>
        // Función para ocultar el mensaje de éxito
        function hideSuccessMessage() {
            setTimeout(function() {
                var successMessage = document.querySelector('.alert-success');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 2000); //  valor (en milisegundos) para ajustar el tiempo de duración
        }

        // Llama a la función para ocultar el mensaje de éxito cuando se cargue la página
        document.addEventListener('DOMContentLoaded', function() {
            hideSuccessMessage();
        });

</script>

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
                            <a class="nav-link active h5" aria-current="page">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                                @if (Auth::user()->role)
                                    ({{ Auth::user()->role }})
                                @endif
                            </a>
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
<br>
@if(session('success'))
<div class="">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
</div>
@endif


<div class="row g-2 justify-content-center m-4">
    <table class="table m-4">
        <div class="card align-items-center text-primary border-0 m-2" style="font-size: 2rem">{{ __('Notificaciones recibidas') }}</div>
        <thead>
            <tr>
                <th scope="col" class="text-center">ID Cliente</th>
                <th scope="col" class="text-center">Nombre del cliente</th>
                <th scope="col" class="text-center">Número de serie</th>
                <th scope="col" class="text-center">Modelo del equipo</th>
                <th scope="col" class="text-center">Estado notificación</th>
                <th scope="col" class="text-center">Fecha notificación</th>
                @can('admin.recepcione.create')
                <th scope="col" class="text-center">Enviar notificación smartphone</th>
                @endcan
                @can('admin.recepcione.create')
                <th scope="col" class="text-center">Enviar notificación wearable</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($recepciones as $recepcione)
            <tr>
                <td class="text-center">{{ $recepcione->id }}</td> 
                <td class="text-center">{{ $recepcione->name }}</td>
                <td class="text-center">{{ $recepcione->numSerie }}</td>
                <td class="text-center">{{ $recepcione->modelo }}</td>
                <td class="text-center">{{ $recepcione->estado_notificacion }}</td>
                <td class="text-center">{{ $recepcione->created_at->format('d-m-Y') }}</td>
                <br>
                @can('admin.recepcione.create')
                <td class="text-center align-middle">
                    <form action="{{ route('notification', ['id' => $recepcione->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-success"><i class="bi bi-phone display-6"></i></button>
                    </form>
                </td>
                @endcan
                @can('admin.recepcione.create')
                <td class="text-center align-middle">
                <form action="{{ route('notificationSmart', ['id' => $recepcione->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary"><i class="bi bi-watch display-6"></i></button>
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
 
</div>

    <div  class="justify-content-center m-4">
            <a class="btn btn-primary" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i>{{ __(' Volver a la página anterior ') }}</a>
    </div>


   

 

