@extends('layouts.app')

@section('template_title')
    {{ $recepcione->name ?? "{{ __('Show') Recepcione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recepcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recepciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $recepcione->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $recepcione->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Numserie:</strong>
                            {{ $recepcione->numSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Caracteristicasfisicas:</strong>
                            {{ $recepcione->caracteristicasFisicas }}
                        </div>
                        <div class="form-group">
                            <strong>Caracteristicasinternas:</strong>
                            {{ $recepcione->caracteristicasInternas }}
                        </div>
                        <div class="form-group">
                            <strong>Accesorios:</strong>
                            {{ $recepcione->accesorios }}
                        </div>
                        <div class="form-group">
                            <strong>Claveacceso:</strong>
                            {{ $recepcione->claveAcceso }}
                        </div>
                        <div class="form-group">
                            <strong>Servicio:</strong>
                            {{ $recepcione->servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $recepcione->name }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $recepcione->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
