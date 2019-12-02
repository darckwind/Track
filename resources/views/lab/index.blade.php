@extends('layouts.app')

@section('content')

	<div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vista general Laboratorios</h2>
            </div>
        </div>
        <table class="table table-responsive-sm">
            <tr>
                <th>nombre instrumento</th>
                <th>creado</th>
                <th>Acction</th>
            </tr>
            @foreach($lab as $labs)
                <tr>
                    <td>{{$labs->nombre_lab }}</td>
                    <td>{{$labs->created_at}}</td>
                    <td>
                        <form action="{{ route('lab.destroy',$labs->id_laboratorio) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('lab.edit',$labs->id_laboratorio) }}">edit</a>
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
