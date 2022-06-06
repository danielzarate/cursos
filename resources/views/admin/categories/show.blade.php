@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Mostrar Categoria</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif

<div class="card">
    <div class="card-body">

    </div>

    <div class="card-footer">

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
