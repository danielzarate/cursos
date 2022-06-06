@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Editar Nivel</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($price, ['route'=>['admin.prices.update',$price],'method'=>'PUT']) !!}

        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'ingrese el nombre del valor']) !!}
            @error('name')
                <span>{{$message}}</span>
            @enderror

            {!! Form::label('value') !!}
            {!! Form::text('value', null, ['class'=>'form-control','placeholder'=>'ingrese el valor']) !!}
            @error('value')
                <span>{{$message}}</span>
            @enderror
        </div>
        {!! Form::submit('Actualizar Nivel', ['class'=>'btn btn-primary']) !!}
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
