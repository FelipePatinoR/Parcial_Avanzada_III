@extends('base')

@section('title', 'Areas')

@section('content')
<div class="text-center">
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID Areea</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        @endphp
        @foreach($areas as $a)
        <tr>
            </th>
            <th>{{$a->idArea}}</th>
            <td>{{$a->descripcion}}</td>


        </tr>
        @php
        $i = $i + 1;
        @endphp
        @endforeach
    </tbody>
</table>
</div>
@endsection