@extends('adminlte::page')

@section('title', 'DeveloTech')

@section('content_header')
<a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm float-right">Crear Post</a>
<h1>Listado de posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
