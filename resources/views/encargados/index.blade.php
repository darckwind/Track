@extends('layouts.app')

@section('content')

	<div class="container">

        <table class="table table-responsive-sm">
            <tr>
                <th>nombre</th>
                <th>run</th>
                <th>email</th>
                <th>telefono</th>
                <th>cargo</th>
                <th>accion</th>
            </tr>
            @foreach($user as $users)
                <tr>
                    <td>{{$users->name }}</td>
                    <td>{{$users->run_enc}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->telefono_enc}}</td>
                    @if($users->id_tipo == 1)
                        <td>sede</td>
                    @elseif($users->id_tipo == 2)
                        <td>C.E.O</td>
                    @elseif($users->id_tipo == 3)
                        <td>Administrador</td>
                    @endif
                    <td>
                        <form action="{{ route('enc.destroy',$users->id) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('enc.edit',$users->id) }}">edit</a>
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
