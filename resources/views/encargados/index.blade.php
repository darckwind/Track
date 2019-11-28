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
            </tr>
            @foreach($user as $users)
                <tr>
                    <td>{{$users->name }}</td>
                    <td>{{$users->run_enc}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->telefono}}</td>
                    <td></td>
                    <td>
                        <form action="{{ route('item.destroy',$users->id) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('item.edit',$users->id) }}">edit</a>
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
