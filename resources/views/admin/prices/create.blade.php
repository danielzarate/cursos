@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Crear Nuevo Precio</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.prices.store']) !!}

        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingrese el precio']) !!}
            @error('name')
                <span class="text-sm text-danger">{{$message}}</span>
            @enderror
            <br>
            {!! Form::label('value') !!}
            {!! Form::text('value', null, ['class'=>'form-control','placeholder'=>'ingrese el valor']) !!}
            @error('value')
                <span class="text-sm text-danger">{{$message}}</span>
            @enderror
        </div>
        {!! Form::submit('Crear Precio', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

    </div>


</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
