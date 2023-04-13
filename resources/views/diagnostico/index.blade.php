@extends('layouts.app')

@section('template_title')
    Diagnostico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Diagnostico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('diagnosticos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fechadiagnostico</th>
										<th>Observaciones</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Numserie</th>
										<th>Motherboard</th>
										<th>Ram</th>
										<th>Unidadalmacenamiento</th>
										<th>Cpu</th>
										<th>Gpu</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnosticos as $diagnostico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $diagnostico->fechaDiagnostico }}</td>
											<td>{{ $diagnostico->observaciones }}</td>
											<td>{{ $diagnostico->marca }}</td>
											<td>{{ $diagnostico->modelo }}</td>
											<td>{{ $diagnostico->numSerie }}</td>
											<td>{{ $diagnostico->motherboard }}</td>
											<td>{{ $diagnostico->ram }}</td>
											<td>{{ $diagnostico->unidadAlmacenamiento }}</td>
											<td>{{ $diagnostico->cpu }}</td>
											<td>{{ $diagnostico->gpu }}</td>

                                            <td>
                                                <form action="{{ route('diagnosticos.destroy',$diagnostico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('diagnosticos.show',$diagnostico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('diagnosticos.edit',$diagnostico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $diagnosticos->links() !!}
            </div>
        </div>
    </div>
@endsection
