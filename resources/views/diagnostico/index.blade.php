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
    <title>compuActual - diagnóstico</title>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-0">
                    <div class="card-header m-4">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h5 style="text-align: center;" id="card_title">
                                {{ __('Diagnósticos compuActual | Agosto 2023') }}
                            </h5>

                            @can('admin.diagnostico.create')
                            <a href="{{ route('diagnostico.create') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                            {{ __('Crear un nuevo diagnóstico ') }}<i class="bi bi-plus"></i>
                            </a>
                              </div>
                            @endcan   
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered-1 border-primary table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No.</th>
                                        
										<th class="text-center">Fecha diagnóstico</th>
										<th class="text-center">Observaciones</th>
										<th class="text-center">Marca</th>
										<th class="text-center">Modelo</th>
										<th class="text-center">No. serie</th>
										<th class="text-center">Tarjeta madre</th>
										<th class="text-center">RAM</th>
										<th class="text-center">Disco duro</th>
										<th class="text-center">Procesador</th>
										<th class="text-center">Tarjeta gráfica</th>
                                        <th class="text-center">Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnosticos  as $diagnostico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td class="text-center">{{ $diagnostico->fechaDiagnostico }}</td>
											<td class="text-center">{{ $diagnostico->observaciones }}</td>
											<td class="text-center">{{ $diagnostico->marca }}</td>
											<td class="text-center">{{ $diagnostico->modelo }}</td>
											<td class="text-center">{{ $diagnostico->numSerie }}</td>
											<td class="text-center">{{ $diagnostico->motherboard }}</td>
											<td class="text-center">{{ $diagnostico->ram }}</td>
											<td class="text-center">{{ $diagnostico->unidadAlmacenamiento }}</td>
											<td class="text-center">{{ $diagnostico->cpu }}</td>
											<td class="text-center">{{ $diagnostico->gpu }}</td>

                                            <td>
                                                <form action="{{ route('diagnosticos.destroy',$diagnostico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-outline-primary mb-2" href="{{ route('diagnosticos.show',$diagnostico->id) }}"><i class="bi bi-pencil-square"></i> {{ __('Mostrar') }}</a>
                                                    @can('admin.recepcione.edit')
                                                    <a class="btn btn-sm btn-outline-secondary  mb-2" href="{{ route('diagnosticos.edit',$diagnostico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                    @can('admin.diagnostico.destroy')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm mb-2"><i class="bi bi-trash3-fill"></i> {{ __('Eliminar') }}</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="display: flex; justify-content: center;">
                                <a class="btn btn-primary" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i>{{ __(' Volver a la página anterior ') }}</a>
                                {!! $diagnosticos->links() !!}
                                
                            </div>
                        </div>
                    </div>
                </div>
               
        </div>
    </div>
