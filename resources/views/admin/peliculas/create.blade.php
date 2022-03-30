@extends("adminlte::page")

@section('title',"Crear pelicula")
@section("content")
<div class="flex justify-center flex-wra    p p-4 mt-5">
    @include("admin.peliculas.form")

</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script> console.log('Hola');</script>
@stop