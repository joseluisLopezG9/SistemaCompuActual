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

<script>

function verificarFortalezaContrasena() {
  var contrasena = document.getElementById("contrasena").value;
  var mensaje = document.getElementById("mensaje");
  var fortaleza = 0;
  
  // Verificar la fortaleza de la contraseña
  if (contrasena.match(/[a-z]+/)) {
    fortaleza += 1;
  }
  if (contrasena.match(/[A-Z]+/)) {
    fortaleza += 1;
  }
  if (contrasena.match(/[0-9]+/)) {
    fortaleza += 1;
  }
  if (contrasena.match(/[$@#&!]+/)) {
    fortaleza += 1;
  }

  // Mostrar mensaje de alerta
  if (fortaleza < 3) {
    alert("¡HEY! La contraseña debe contener al menos 8 caracteres, incluyendo al menos una letra minúscula, una letra mayúscula, un número y un carácter especial.");
    }
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


<div class="container m-4">
    <table class="table m-4">
        <div class="card align-items-center text-primary border-0 m-2" style="font-size: 2rem">{{ __('Usuarios registrados') }}</div>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol asignado</th>
            <th scope="col">Actualizar usuario</th>
            <th scope="col">Eliminar usuario</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Miguel Ocaña Ascencio</td>
            <td>Administrador</td>
            <td><button class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></button></td>
            <td><button class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></button></i></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sujaile Díaz Olvera</td>
            <td>Técnico</td>
            <td><button class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></button></td>
            <td><button class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></button></i></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Harumi Espinoza Montes</td>
            <td>Cliente</td>
            <td><button class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></button></td>
            <td><button class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></button></i></td>
          </tr>
        </tbody>
      </table>
</div>

 
<div class="row g-2 justify-content-center m-4">
    <div class="col-md-10">
            <div class="card border-0 m-4">
                <div class="card align-items-center text-primary border-0" style="font-size: 2rem">{{ __('Registrar un nuevo usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>
                        
                            <div class="col-md-6">
                                <select id="role" class="form-select @error('role') is-invalid @enderror" name="role" required>
                                    <option value="" selected disabled>{{ __('Selecciona un rol...') }}</option>
                                    <option value="admin">{{ __('Administrador') }}</option>
                                    <option value="tecnico">{{ __('Técnico') }}</option>
                                    <option value="cliente">{{ __('Cliente') }}</option>
                                </select>
                        
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" onblur="verificarFortalezaContrasena()" required autocomplete="new-password">
                                <input type="hidden" id="contrasena" name="contrasena">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Por favor, confirma la contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
            
                

                            <div class="col-md-6 offset-md-4" style="display: flex; justify-content: center;">
                                
                                <button type="submit" class="btn btn-success mb-2"><i class="bi bi-person-plus-fill"></i>
                                    {{ __('Registrar usuario') }}
                                    
                                </button>
                            </div>
                          
                        <div  class="col-md-6 offset-md-4" style="display: flex; justify-content: center;">
                            <a class="btn btn-primary" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i>{{ __(' Volver a la página anterior ') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

