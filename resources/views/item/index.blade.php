@extends('layouts.app')

@section('content')

	<div class="container">

        <table class="table table-responsive-sm">
            <tr>
                <th>nombre instrumento</th>
                <th>creado</th>
                <th>Acction</th>
            </tr>
            @foreach($item as $items)
                <tr>
                    <td>{{$items->description }}</td>
                    <td>{{$items->created_at}}</td>
                    <td>
                        <form action="{{ route('item.destroy',$items->id_item) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('model.edit',$items->id_item) }}">edit</a>
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
