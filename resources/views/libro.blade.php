@extends('base')

@section('title', 'Libros')

@section('content')
<div class="text-center">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">ISBN</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Genereo literario</th>
            <th scope="col">Observacion</th>
            <th scope="col">Area</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($libros as $l)
        <tr>
            </th>
            @php
            $f = $l->foto;
            @endphp
            <td><img src="{{ asset('img/'. $f) }}" alt="{{ $f }}" width="20%" height="auto" style="padding: 0px;"></td>
            <th>{{$l->ISBN}}</th>
            <td>{{$l->nombre}}</td>
            <td>{{$l->descripcion}}</td>
            <td>{{$l->generoLiterario}}</td>
            <td>{{$l->observacion}}</td>
            <td>{{$l->area}}</td>


        </tr>
        @php
        $i = $i + 1;
        @endphp
        @endforeach
    </tbody>
</table>
</div>
@endsection