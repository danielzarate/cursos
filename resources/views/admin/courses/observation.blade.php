@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Observaciones del Curso: {{$course->title}}</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>['admin.courses.reject',$course]]) !!}
        <div class="form-group">
            {!! Form::label('body','Observaciones del Curso') !!}

            {!! Form::textarea('body',null) !!}
            @error('body')
                <strong class="text-danger">{{$message}}</strong>
            @enderror



        </div>
        {!! Form::submit('Rechazar Curso', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/instructor/course/form.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop
