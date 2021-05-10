@extends('adminlte::page')

@section('title', 'Curso Onlyne EASY')

@section('content_header')
    <h1>Crear nueva categoria</h1>
@stop

@section('content')
    <div class="car">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria ']) !!}
            
                @error('name')
                <span class="text-danger">{{$message}}</span>
                
                @enderror



            </div>

            {!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}

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
