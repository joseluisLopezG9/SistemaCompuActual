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
<div class="collapse show border" id="company1">
<div class="display-4 text-success">Diágnostico</div>
<form action="" class="row g-3">
<div class="col-md-6">
        <div class="" style="width: 38rem;">
        <div class="card-body mb-2">

        <div class="form-group mb-2">
        <label for="">Fecha del diágnostico</label>
        {{ Form::date('fechaDiagnostico', $diagnostico->fechaDiagnostico, ['class' => 'form-control' . ($errors->has('fechaDiagnostico') ? ' is-invalid' : '')]) }}
        {!! $errors->first('fechaDiagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>    
        <div class="form-group mb-2">
            <label for="">Observaciones de la recepción</label>
            {{ Form::text('observaciones', $diagnostico->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : '')]) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Marca del equipo</label>
            {{ Form::text('marca', $diagnostico->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : '')]) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Modelo del equipo</label>
            {{ Form::text('modelo', $diagnostico->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Número de serie</label>
            {{ Form::text('numSerie', $diagnostico->numSerie, ['class' => 'form-control' . ($errors->has('numSerie') ? ' is-invalid' : '')]) }}
            {!! $errors->first('numSerie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Tarjeta madre</label>
            {{ Form::text('motherboard', $diagnostico->motherboard, ['class' => 'form-control' . ($errors->has('motherboard') ? ' is-invalid' : '')]) }}
            {!! $errors->first('motherboard', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Memoria RAM</label>
            {{ Form::text('ram', $diagnostico->ram, ['class' => 'form-control' . ($errors->has('ram') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Disco duro / Unidad de estado sólido</label>
            {{ Form::text('unidadAlmacenamiento', $diagnostico->unidadAlmacenamiento, ['class' => 'form-control' . ($errors->has('unidadAlmacenamiento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('unidadAlmacenamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Procesador</label>
            {{ Form::text('cpu', $diagnostico->cpu, ['class' => 'form-control' . ($errors->has('cpu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cpu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="">Tarjeta de video</label>
            {{ Form::text('gpu', $diagnostico->gpu, ['class' => 'form-control' . ($errors->has('gpu') ? ' is-invalid' : '')]) }}
            {!! $errors->first('gpu', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </div>
</div>   
<div style="display: flex; justify-content: center;">
    <button class="btn btn-primary">{{ __(' Enviar el diágnostico ') }}</button>
</div>

</div>   
</div>