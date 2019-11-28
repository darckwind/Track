@extends('../layouts.app')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editando Usuario {{$user->name}}</h2>
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

        <form action="{{ route('enc.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                    Run
                </label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="run" value="{{$user->run_enc}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                    Telefono
                </label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="fono" value="{{$user->telefono_enc}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                    Tipo
                </label>

                <div class="col-md-6">
                    <select name="tipo"  class="form-control">
                        <option value="1">Sede</option>
                        <option value="2">CEO</option>
                        <option value="3">Administrador</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Nueva Clave</label>

                <div class="col-md-6">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

	</div>
@endsection
