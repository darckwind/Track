@extends('layouts.app')

@section('content')

	<div class="container">

        <table class="table table-responsive-sm">
            <tr>
                <th>Nombre Sede</th>
                <th>Direccion</th>
                <th>Encargado</th>
                <th>Acction</th>
            </tr>
            @foreach($sede as $sedes)
                <tr>
                    <td>{{$sedes->nombre_sede}}</td>
                    <td>{{$sedes->direccion_sede}}</td>
                    <th>{{$sedes->encargado}}</th>
                    <td>
                        <form action="{{ route('sede.destroy',$sedes->id_sede) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('sede.edit',$sedes->id_sede) }}">edit</a>
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
