@extends('../layouts.app')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Nueva Sede</h2>
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
        @if(Auth::user()->id_tipo != 3)
            Creacion de Sedes no habilitada para usuario {{Auth::user()->name}}
        @elseif(Auth::user()->id_tipo == 3)
            <form action="{{ route('sede.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nombre Sede</label>
                        <input type="text" class="form-control" name="nombre_sede">
                        <small  class="form-text text-muted">en caso de usar una abreviacion, que esta sea facil de identificar</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Dirección Sede</label>
                        <input type="text" class="form-control" name="direccion_sede">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Encargado Sede</label>
                        <select name="encargado" class="form-control">
                            @foreach($user as $users)
                                <option value="{{$users->id}}">{{$users->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Estado Sede</label>
                        <select name="estado" class="form-control">
                            @foreach($estado as $estados)
                                <option value="{{$estados->id_estado}}">{{$estados->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        @endif
	</div>
@endsection
