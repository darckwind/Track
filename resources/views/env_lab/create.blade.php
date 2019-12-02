@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <select name="sede" class="form-control">
                    @foreach($sede as $sedes)
                        <option value="{{$sedes->id_sede}}">{{$sedes->nombre_sede}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <select name="lab" class="form-control">
                    @foreach($lab as $labs)
                        <option value="{{$labs->id_laboratorio}}">{{$labs->nombre_lab}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <select name="item" class="form-control">
                    @foreach($item as $items)
                        <option value="{{$items->id_item}}">{{$items->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <input type="number" class="form-control" name="cantidad" min="0">
            </div>
        </div>
    </div>
@endsection
