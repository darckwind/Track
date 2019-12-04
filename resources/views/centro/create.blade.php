@extends('../layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('centro.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre Centro</label>
                    <input type="text" class="form-control" name="nombre_centro">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Region Centro</label>
                    <input type="text" class="form-control" name="region_centro">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Comuna Centro</label>
                    <input type="text" class="form-control" name="comuna_centro">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Direccion Centro</label>
                    <input type="text" class="form-control" name="direccion_centro">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Encargado Centro</label>
                    <select name="encargado" class="form-control">
                        @foreach($user as $users)
                            <option value="{{$users->id}}">{{$users->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Estado Centro</label>
                    <select name="estado" class="form-control">
                        @foreach($estado as $estados)
                            <option value="{{$estados->id_estado}}">{{$estados->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="colmd-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
