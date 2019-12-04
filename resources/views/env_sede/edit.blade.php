@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('envsede.update',$envio->id_env_sede) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Sede</label>
                    <select name="sede" class="form-control">
                        @foreach($sede as $sedes)
                            @if($sedes->id_sede == $envio->id_sede)
                                <option value="{{$sedes->id_sede}}">Sede previa {{$sedes->nombre_sede}}</option>
                            @endif
                        @endforeach
                        @foreach($sede as $sedes)
                            <option value="{{$sedes->id_sede}}">{{$sedes->nombre_sede}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Laboratorio</label>
                    <select name="lab" class="form-control">
                        @foreach($lab as $labs)
                            @if($labs->id_laboratorio == $envio->id_laboratorio)
                                <option value="{{$labs->id_laboratorio}}">Laboratorio previo {{$labs->nombre_lab}}</option>
                            @endif
                        @endforeach
                        @foreach($lab as $labs)
                            <option value="{{$labs->id_laboratorio}}">{{$labs->nombre_lab}}</option>
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
