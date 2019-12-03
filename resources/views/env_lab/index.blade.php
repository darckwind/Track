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
                        <form action="{{ route('sede.destroy',$envs->id_env_lab) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('sede.edit',$envs->id_env_lab) }}">edit</a>
                            <!--selector multiples edicion de datos-->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
