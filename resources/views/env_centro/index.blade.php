@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vista general envios Centros</h2>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <tr>
                <th>Centro</th>
                <th>Sede</th>
                <th>Accion</th>
            </tr>
            @foreach($enviado as $envs)
                <tr>
                    <td>{{$envs->nombre_centro}}</td>
                    <td>{{$envs->nombre_sede}}</td>

                    <td>
                        <form action="{{ route('envceo.destroy',$envs->id_env_cen) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('envceo.edit',$envs->id_env_cen) }}">edit</a>
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
