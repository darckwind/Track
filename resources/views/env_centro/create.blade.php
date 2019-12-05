@extends('../layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('envceo.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Centro</label>
                    <select name="centro" class="form-control">
                        @foreach($centro as $centros)
                            <option value="{{$centros->id_centro}}">{{$centros->nombre_centro}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Sede</label>
                    <select name="sede" class="form-control">
                        @foreach($sede as $sedes)
                            <option value="{{$sedes->id_sede}}">{{$sedes->nombre_sede}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 2%;">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
