@extends('layouts.app')

@section('content')

	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Vista general Sedes</h2>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{{ $message }}</p>
            </div>
            </br>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table class="table table-responsive-sm">
            <tr>
                <th>Nombre Sede</th>
                <th>Direccion</th>
                <th>Encargado</th>
                <th>Estado</th>
                <th>Acction</th>
            </tr>
            @foreach($sede as $sedes)
                <tr>
                    <td>{{$sedes->nombre_sede}}</td>
                    <td>{{$sedes->direccion_sede}}</td>
                    <th>{{$sedes->name}}</th>
                    <th>{{$sedes->descripcion}}</th>
                    <td>
                        @if(Auth::user()->id_tipo != 3)
                            <form action="{{ route('sede.destroy',$sedes->id_sede) }}" method="POST">
                                <a class="btn btn-warning" href="{{ route('sede.edit',$sedes->id_sede) }}">edit</a>
                        @elseif(Auth::user()->id_tipo == 3)
                                <!--selector multiples edicion de datos-->
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                        @endif
                            </form>
                    </td>
                </tr>
            @endforeach
        </table>
	</div>

@endsection
