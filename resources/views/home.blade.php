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
                                    <button href="track.devriko.com/etiqueta/lab" class="btn-block btn-info">Etiquetas Laboratorio</button>
                                </div>
                                <div class="col-md-4">
                                    <button href="track.devriko.com/etiqueta/sede" class="btn-block btn-info">Etiquetas Sedes</button>
                                </div>
                                <div class="col-md-4">
                                    <button href="track.devriko.com/etiqueta/cen" class="btn-block btn-info">Etiquetas Centros</button>
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
