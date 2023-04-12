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

    <title>compuActual - recepción</title>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h5 id="card_title">
                                {{ __('RECEPCIONES') }}
                            </h5>

                             <div class="float-right">
                                <a href="{{ route('recepciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear una nueva recepción') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered-1 border-secondary">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Marca</th>
										<th>Modelo</th>
										<th>No. Serie</th>
										<th>Caracteristicas Fisicas</th>
										<th>Caracteristicas Internas</th>
										<th>Accesorios</th>
										<th>Contraseña</th>
										<th>Servicio</th>
										<th>Nombre</th>
										<th>Teléfono</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recepciones as $recepcione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recepcione->marca }}</td>
											<td>{{ $recepcione->modelo }}</td>
											<td>{{ $recepcione->numSerie }}</td>
											<td>{{ $recepcione->caracteristicasFisicas }}</td>
											<td>{{ $recepcione->caracteristicasInternas }}</td>
											<td>{{ $recepcione->accesorios }}</td>
											<td>{{ $recepcione->claveAcceso }}</td>
											<td>{{ $recepcione->servicio }}</td>
											<td>{{ $recepcione->name }}</td>
											<td>{{ $recepcione->telefono }}</td>

                                            <td>
                                                <form action="{{ route('recepciones.destroy',$recepcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary mb-2" href="{{ route('recepciones.show',$recepcione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success  mb-2" href="{{ route('recepciones.edit',$recepcione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm  mb-2"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success btn-sm m-2" href="{{ route('home') }}""></i> {{ __('Volver a la página anterior') }}</a>
                {!! $recepciones->links() !!}
            </div>
        </div>
    </div>
