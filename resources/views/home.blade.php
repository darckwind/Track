@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Auth::user()->id_tipo == 3)

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('etlab')}}" class="btn-block btn btn-info">Etiquetas Laboratorio</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('etsede')}}" class="btn-block btn btn-warning">Etiquetas Sedes</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('etcentro')}}" class="btn-block btn btn-primary">Etiquetas Centros</a>
                                </div>
                            </div>
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
