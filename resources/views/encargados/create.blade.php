@extends('../layouts.app')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Nuevo Instrumento</h2>
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

        <form action="{{ route('enc.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                    Run
                </label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="run">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                    Telefono
                </label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="fono">
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
                <label for="password" class="col-md-4 col-form-label text-md-right">Clave</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmacion Clave</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

	</div>
@endsection
