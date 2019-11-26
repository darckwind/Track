@extends('../layouts.app')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add new Bike Model</h2>
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

        <form action="{{ route('item.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group align-content-center col-md-6">
                    <label for="exampleInputEmail1">Nombre Item</label>
                    <input type="text" class="form-control" name="nombre_item">
                    <small  class="form-text text-muted">en caso de usar una abreviacion, que esta sea facil de identificar</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

	</div>
@endsection
