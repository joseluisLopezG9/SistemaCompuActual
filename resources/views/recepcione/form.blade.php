<div class="collapse show border" id="company1">
    <div class="display-4 text-success">Recepción</div>
    <form action="" class="row g-3">
      <div class="col-md-6">
          <div class="" style="width: 38rem;">
            <div class="card-body mb-2"> 
                <div class="form-group mb-2">
                    <label for="">Marca</label>
                    {{ Form::text('marca', $recepcione->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Modelo del equipo</label>
                    {{ Form::text('modelo', $recepcione->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Número de serie</label>
                    {{ Form::text('numSerie', $recepcione->numSerie, ['class' => 'form-control' . ($errors->has('numSerie') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('numSerie', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Caracteristicas Fisicas</label>
                    {{ Form::text('caracteristicasFisicas', $recepcione->caracteristicasFisicas, ['class' => 'form-control' . ($errors->has('caracteristicasFisicas') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('caracteristicasFisicas', '<div class="invalid-feedback">:message</div>') !!}
                </div>
              
                <div class="form-group mb-2">
                    <label for="">Caracteristicas Internas</label>
                    {{ Form::text('caracteristicasInternas', $recepcione->caracteristicasInternas, ['class' => 'form-control' . ($errors->has('caracteristicasInternas') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('caracteristicasInternas', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Accesorios dejados</label>
                    {{ Form::text('accesorios', $recepcione->accesorios, ['class' => 'form-control' . ($errors->has('accesorios') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('accesorios', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Contraseña del equipo</label>
                    {{ Form::text('claveAcceso', $recepcione->claveAcceso, ['class' => 'form-control' . ($errors->has('claveAcceso') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('claveAcceso', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Especificación del servicio que se va a ofrecer</label>
                    {{ Form::text('servicio', $recepcione->servicio, ['class' => 'form-control' . ($errors->has('servicio') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('servicio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Nombre del cliente</label>
                    {{ Form::text('name', $recepcione->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mb-2">
                    <label for="">Teléfono del cliente</label>
                    {{ Form::number('telefono', $recepcione->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'maxlength' => 10]) }}
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            </div>
          </div>
      </div>   
    <div style="display: flex; justify-content: center;">
        <button class="btn btn-primary">{{ __(' Continuar con la recepción ') }} <i class="bi bi-arrow-right"></i></button>
        
    </div>
    </div>   
</div>