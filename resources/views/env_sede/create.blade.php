@extends('layouts.app')

@section('content')

    {{$enviado}}
    {{$sede}}
    <div class="container">
        <form action="{{ route('envsede.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Sede</label>
                    <select name="sede" class="form-control">
                        @foreach($sede as $sedes)
                            @foreach($enviado as $env)
                                @if($sedes->id_sede != $env->id_sede)
                                    <option value="{{$sedes->id_sede}}">{{$sedes->nombre_sede}}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Laboratorio</label>
                    <select name="lab" class="form-control">
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
