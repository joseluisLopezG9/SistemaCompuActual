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
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <title>compuActual - notificaciones</title>

<script>

    function sendNotificationAndChangeStatus(id, deviceType) {
        fetch("{{ url('notification') }}" + "/" + id, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ device_type: deviceType })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Notificación enviada',
                    text: 'La notificación se ha enviado satisfactoriamente al dispositivo ' + deviceType + '.',  
                }).then(() => {
                    // Actualizar el estado en la tabla HTML
                    const estadoCell = document.getElementById('estado_' + id);
                    estadoCell.textContent = 'ENVIADA';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Notificación no enviada',
                    text: 'La notificación ya ha sido enviada al cliente, por favor espere a que responda.',
                });
            }
        })
        .catch(error => {
            console.error("Error:", error);
            Swal.fire({
                icon: 'error',
                title: 'Error al enviar la notificación',
                text: 'Ha ocurrido un error al enviar la notificación.',
            });
        });
    }
  
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
                <td class="text-center">{{ $recepcione->modelo }}
                <td class="text-center" id="estado_{{ $recepcione->id }}">{{ $recepcione->estado_notificacion }}</td>   
                <td class="text-center">{{ $recepcione->created_at->format('d-m-Y') }}</td>
                <br>
                @can('admin.recepcione.create')
                <td class="text-center align-middle">
                    <form onsubmit="event.preventDefault(); sendNotificationAndChangeStatus({{ $recepcione->id }}, 'móvil')" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-success"><i class="bi bi-phone-vibrate display-6"></i></button>
                    </form>
                </td>
                @endcan
                @can('admin.recepcione.create')
                <td class="text-center align-middle">
                    <form onsubmit="event.preventDefault(); sendNotificationAndChangeStatus({{ $recepcione->id }}, 'wearable')" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary"><i class="bi bi-smartwatch display-6"></i></button>
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


   

 

