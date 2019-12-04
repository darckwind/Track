@extends('layouts.app')

@section('content')
    <div class="container">
        {{$sede}}
        {{$lab}}
        <form action="{{ route('envsede.store') }}" method="POST">
            @csrf
            <div class="row">

            </div>
        </form>
    </div>
@endsection
