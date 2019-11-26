@extends('../layouts.app')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editando Laboratorio {{$lab->nombre_lab}}</h2>
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

        <form action="{{ route('lab.update',$lab->id_laboratorio) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group align-content-center col-md-6">
                    <label for="exampleInputEmail1">Nombre Laboratorio</label>
                    <input type="text" class="form-control" name="nombre_lab" value="{{$lab->nombre_lab}}">
                    <small  class="form-text text-muted">en caso de usar una abreviacion, que esta sea facil de identificar</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

	</div>
@endsection
