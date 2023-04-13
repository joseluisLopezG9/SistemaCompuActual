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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <title>compuActual - diágnostico</title>
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
    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                    <div class="container-fluid p-3">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="container-fluid p-2 align-items-center">
                              <div class="d-flex justify-content-around">
                                <button
                                  class="btn btn-outline bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company1"
                                  aria-expanded="true"
                                  aria-controls="company1"
                                  onclick="stepFunction(event)">
                                <i class="bi bi-person-vcard-fill"></i>
                                </button>
                                <span
                                  class="bg-primary w-25 rounded mt-auto mb-auto me-1 ms-1"
                                  style="height: 0.2rem">
                                </span>
                                <button
                                  class="btn bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company2"
                                  aria-expanded="false"
                                  aria-controls="company3"
                                  onclick="stepFunction(event)">
                                <i class="bi bi-heart-pulse-fill"></i>
                                </button>
                                <span
                                  class="bg-primary w-25 rounded mt-auto mb-auto me-1 ms-1"
                                  style="height: 0.2rem">
                                </span>
                                <button
                                  class="btn bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company3"
                                  aria-expanded="false"
                                  aria-controls="company3"
                                  onclick="stepFunction(event)">
                                <i class="bi bi-chat-quote-fill"></i>
                                </button>
                                <span
                                  class="bg-primary w-25 rounded mt-auto mb-auto me-1 ms-1"
                                  style="height: 0.2rem">
                                </span>
                                <button
                                  class="btn bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company4"
                                  aria-expanded="false"
                                  aria-controls="company4"
                                  onclick="stepFunction(event)">
                                <i class="bi bi-wrench-adjustable-circle"></i>
                                </button>
                                <span
                                  class="bg-primary w-25 rounded mt-auto mb-auto me-1 ms-1"
                                  style="height: 0.2rem"
                                >
                                </span>
                                <button
                                  class="btn bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company5"
                                  aria-expanded="false"
                                  aria-controls="company4"
                                  onclick="stepFunction(event)">
                                  4
                                </button>
                                <span
                                  class="bg-primary w-25 rounded mt-auto mb-auto me-1 ms-1"
                                  style="height: 0.2rem">
                                </span>
                                <button
                                  class="btn bg-primary text-white btn-sm rounded-pill"
                                  style="width: 2rem; height: 2rem"
                                  data-bs-toggle="collapse"
                                  data-bs-target="#company6"
                                  aria-expanded="false"
                                  aria-controls="company4"
                                  onclick="stepFunction(event)">
                                  4
                                </button>
                              </div>
                            </div>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                   
                    <div class="card-body">
                        <form method="POST" action="{{ route('diagnosticos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('diagnostico.form')

                        </form>
                    </div>
                    <div style="display: flex; justify-content;">
                      <button class="btn btn-success btn-sm m-2" id="btn-back" href="{{ route('home') }}"> <i class="bi bi-arrow-left"></i> {{ __('Volver a la página anterior') }}</button>
                      
                  </div>
            </div>
        </div>
    </section>

