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
                <th>Creado en</th>
                <th>Accion</th>
            </tr>

            <tr>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>s</td>
                <td>
                    <form action="{{ route('envlab.destroy',$envio->id_env_lab) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('lab.edit',$envio->id_env_lav) }}">edit</a>
                        <!--selector multiples edicion de datos-->
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

@endsection
