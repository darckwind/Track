@extends('layouts.app')

@section('content')

	<div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>General View Client's</h2>
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

        <table class="table table-responsive-sm">
            <tr>
                <th>Nombre Sede</th>
                <th>Direccion</th>
                <th>Encargado</th>
                <th>Acction</th>
            </tr>
            @foreach($sede as $sedes)
                <tr>
                    <td>{{$sedes}}</td>
                </tr>
            @endforeach
        </table>
	</div>

@endsection
