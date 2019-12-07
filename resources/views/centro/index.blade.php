@extends('../layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Vista general Centros</h2>
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
                <th>Nombre centro</th>
                <th>Region centro</th>
                <th>Comuna centro</th>
                <th>Direccion</th>
                <th>Encargado</th>
                <th>Estado</th>
                <th>Acction</th>
            </tr>
            @foreach($centro as $centros)
                <tr>
                    <td>{{$centros->nombre_centro}}</td>
                    <td>{{$centros->region_centro}}</td>
                    <td>{{$centros->comuna_centro}}</td>
                    <td>{{$centros->direccion_centro}}</td>
                    <th>{{$centros->name}}</th>
                    <th>{{$centros->descripcion}}</th>
                    <td>
                        <form action="{{ route('centro.destroy',$centros->id_centro) }}" method="POST">
                            @if(Auth::user()->id_tipo != 3)
                                <a class="btn btn-warning" href="{{ route('centro.edit',$centros->id_centro) }}">edit</a>
                                <!--selector multiples edicion de datos-->
                            @elseif(Auth::user()->id_tipo == 3)
                                <a class="btn btn-warning" href="{{ route('centro.edit',$centros->id_centro) }}">edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Delete</button>

                            @endif
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
