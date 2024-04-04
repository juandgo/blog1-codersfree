@extends('adminlte::page')

@section('title', 'DeveloTech')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoría']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
