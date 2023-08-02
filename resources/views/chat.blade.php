
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

    <title>compuActual - home</title>
</head>

<script>

  function enviarMensaje() {

  
    Swal.fire({
    icon: 'success',
                    title: 'Mensaje enviado',
                    text: 'El mensaje fue enviado con éxito',
  });

  var inputElement = document.getElementById("mensajeInput");
  inputElement.value = "";

  }
</script>


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

<style>
.chat-container {
  background-color: #f8f8f8;
  border: 1px solid #dcdcdc;
  border-radius: 5px;
  padding: 10px;
}

.chat-header {
  display: flex;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #dcdcdc;
}

.avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #ff6666;
  margin-right: 10px;
}

.chat-info {
  display: flex;
  flex-direction: column;
}

.chat-info h3 {
  margin: 0;
  font-size: 18px;
  color: #333333;
}

.last-seen {
  color: #999999;
  font-size: 12px;
}

.chat-body {
  margin-top: 10px;
  overflow-y: scroll;
  height: 200px;
}

.message {
  display: flex;
  margin-bottom: 10px;
}

.message .avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #66ccff;
  margin-right: 10px;
}

.message.incoming {
  align-items: flex-start;
}

.message.outgoing {
  align-items: flex-end;
}

.message-content {
  background-color: #fff;
  border-radius: 5px;
  padding: 10px;
  max-width: 70%;
}

.message-content p {
  margin: 0;
  font-size: 14px;
  color: #333333;
}

.message-time {
  font-size: 12px;
  color: #999999;
  margin-left:
}


</style>

<div class="container">
    <div class="card-body m-2 border-0"> 
    <div class="card align-items-center text-primary border-0" style="font-size: 2rem">{{ __('Comunicación en tiempo real') }}</div>
    </div>



<div class="chat-container collapse show border">
    <div class="chat-header">
      <div class="avatar"></div>
      <div class="chat-info">
        <h3>Técnico | compuActual</h3>
        <span>Última vez en línea: <span class="last-seen">Hace 5 minutos</span></span>
      </div>
    </div>
  
    <div class="chat-body">
      <div class="message incoming">
        <div class="message-content">
          <p>Hola, buen día</p>
          <span class="message-time">11:30 am</span>
        </div>
      </div>
  
      <div class="message outgoing">
        <div class="message-content">
          <strong><p>Qué tal, buen día, ¿en qué podemos servirle?</p></strong>
          <span class="message-time">11:35 am</span>
        </div>
      </div>
  
      <div class="message incoming">
        <div class="message-content">
          <p>Me gustaría saber si ya estará listo mi equipo de cómputo</p>
          <span class="message-time">11:40 am</span>
        </div>
      </div>
  
      <div class="message outgoing">
        <div class="message-content">
            <strong><p>¿Qué día trajo su equipo a reparación?</p></strong>
          <span class="message-time">11:45 am</span>
        </div>
      </div>
    </div>

    <div class="message outgoing">
        <div class="message-content">
          <p>El día Viernes</p>
          <span class="message-time">11:55 am</span>
        </div>
      </div>
    </div>
  
  
    <div class="chat-footer">
    <div class="message outgoing">
        <div class="message-content">
            <div class="row">
                <!-- Columna para el input -->
                <div class="col">
                    <input type="text" placeholder="Escriba aquí su mensaje..." class="mb-2 form-control py-2 px-3 rounded-pill border-0 shadow-sm" id="mensajeInput">
                </div>
                <!-- Columna para el botón de enviar -->
                <div class="col-auto">
                    <button class="btn btn-success" onclick="enviarMensaje()"><i class="bi bi-envelope"> Enviar</button></i> 
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<div style="display: flex; justify-content: center;">
    <a class="btn btn-primary" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i>{{ __(' Volver a la página anterior ') }}</a>
</div>
  
  