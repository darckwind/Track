@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vista general envios Sedes</h2>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <tr>
                <th>Sede</th>
                <th>Laboratorio</th>
                <th>Accion</th>
            </tr>
            @foreach($enviado as $envs)
                <tr>
                    <td>{{$envs->nombre_sede}}</td>
                    <td>{{$envs->nombre_lab}}</td>

                    <td>
                        <form action="{{ route('envsede.destroy',$envs->id_env_sede) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('envsede.edit',$envs->id_env_sede) }}">edit</a>
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
