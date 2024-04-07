@extends('adminlte::page')

@section('title', 'DeveloTech')

@section('content_header')
<h1>Crear Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la categoría'])
            !!}

            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la
            categoría','readonly']) !!}
            @error('slug')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoría:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

            @error('category_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Etiquetas</p>

            @foreach ($tags as $tag)
            <label for="" class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{ $tag->name }}
            </label>

            @endforeach
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Estado</p>
            <label for="">
                {!! Form::radio('status', 1, true) !!}
                Borrador
            </label>
            <label for="">
                {!! Form::radio('status', 2) !!}
                publicado
            </label>
        </div>

        <div class="form-group">
            {!! Form::label('extract', 'Extracto:') !!}
            {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

            @error('extract')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Cuerpo del post:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

            @error('body')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {!! Form::submit('Crear post', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
