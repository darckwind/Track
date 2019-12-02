@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vista general envios Laboratorios</h2>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <tr>
                <th>Laboratorio</th>
                <th>Instrumento</th>
                <th>Cantidad</th>

                <th>Accion</th>
            </tr>
            @foreach($enviado as $envs)
                <tr>
                    <td>{{$envs->nombre_lab}}</td>
                    <td>{{$envs->description}}</td>
                    <td>{{$envs->cantidad}}</td>

                    <td>
                        holo
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
