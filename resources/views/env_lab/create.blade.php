@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('envlab.store') }}" method="POST">
            <div class="row">
                @csrf
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Sede</label>
                    <select name="sede" class="form-control">
                        @foreach($sede as $sedes)
                            <option value="{{$sedes->id_sede}}">{{$sedes->nombre_sede}}</option>
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
                <div class="col-md-8">
                    <label for="exampleInputEmail1">Instrumento</label>
                    <select name="item" class="form-control">
                        @foreach($item as $items)
                            <option value="{{$items->id_item}}">{{$items->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="exampleInputEmail1">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" min="0">
                </div>
                <div class="col-md-12" style="margin-top: 2%;">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </form>
    </div>
@endsection
