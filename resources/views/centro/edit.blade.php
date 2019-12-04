@extends('../layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('centro.update' ,$centro->id_centro) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre Centro</label>
                    <input type="text" class="form-control" name="nombre_centro" value="{{$centro->nombre_centro}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Region Centro</label>
                    <input type="text" class="form-control" name="region_centro" value="{{$centro->region_centro}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Comuna Centro</label>
                    <input type="text" class="form-control" name="comuna_centro" value="{{$centro->comuna_centro}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Direccion Centro</label>
                    <input type="text" class="form-control" name="direccion_centro" value="{{$centro->direccion_centro}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Encargado Centro</label>
                    <select name="encargado" class="form-control">
                        @foreach($user as $users)
                            @if($users->id == $centro->id_users)
                                <option value="{{$users->id}}">Encargado previo {{$users->name}}</option>
                            @endif
                        @endforeach
                        @foreach($user as $users)
                            <option value="{{$users->id}}">{{$users->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Estado Centro {{$centro->id_estado}}</label>
                    <select name="estado" class="form-control">
                        @foreach($estado as $estados)
                            @if($estados->id_estados == $centro->id_estado)
                                <option value="{{$estados->id_estado}}">Estado previo {{$estados->descripcion}}</option>
                            @endif
                        @endforeach
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
