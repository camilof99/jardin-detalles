@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Hola Mundo</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam beatae excepturi eaque incidunt sequi architecto nulla similique sint omnis expedita, perspiciatis quidem nihil laborum iste obcaecati odit provident mollitia nam.</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
