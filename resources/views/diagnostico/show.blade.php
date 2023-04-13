@extends('layouts.app')

@section('template_title')
    {{ $diagnostico->name ?? "{{ __('Show') Diagnostico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Diagnostico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('diagnosticos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechadiagnostico:</strong>
                            {{ $diagnostico->fechaDiagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $diagnostico->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $diagnostico->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $diagnostico->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Numserie:</strong>
                            {{ $diagnostico->numSerie }}
                        </div>
                        <div class="form-group">
                            <strong>Motherboard:</strong>
                            {{ $diagnostico->motherboard }}
                        </div>
                        <div class="form-group">
                            <strong>Ram:</strong>
                            {{ $diagnostico->ram }}
                        </div>
                        <div class="form-group">
                            <strong>Unidadalmacenamiento:</strong>
                            {{ $diagnostico->unidadAlmacenamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cpu:</strong>
                            {{ $diagnostico->cpu }}
                        </div>
                        <div class="form-group">
                            <strong>Gpu:</strong>
                            {{ $diagnostico->gpu }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
