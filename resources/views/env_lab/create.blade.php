@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('envlab.store') }}" method="POST">
            <div class="row">
                @csrf
                <div class="col-md-4">
                    <label for="exampleInputEmail1">Laboratorio</label>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Busqueda" class="col-sm-3 filter-table">
                    <select name="lab" class="form-control">
                        @foreach($lab as $labs)
                            <option value="{{$labs->id_laboratorio}}">{{$labs->nombre_lab}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
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




    <script>
        function myFunction() {
            // Declare variables
            var input, filter, x, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            x = document.getElementsByName("lab");


            // Loop through all table rows, and hide those who don't match the search query
            for(let i = 0; i < x[0].getElementsByTagName("option").length; i++){

                if(x[0].getElementsByTagName("option")[i].innerText.toUpperCase().indexOf(filter)>-1){
                    x[0].getElementsByTagName("option")[i].style.display="";
                }else{
                    x[0].getElementsByTagName("option")[i].style.display="none";

                }

            }
        }
    </script>
@endsection
