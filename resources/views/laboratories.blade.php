@extends('adminlte::page')
@section('content_header')
<h1>Laboratorios</h1>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>id</th>
                <th>Bloque</th>
                <th>Nombre</th>
            </thead>
            <tbody>
                @foreach ($laboratories ?? [] as $laboratory)
                <tr onclick="location.href='{{route('dashboard.laboratory',$laboratory->id)}}'" style="cursor: pointer;">
                    <td>{{$laboratory->id}}</td>
                    <td>{{$laboratory->block}}</td>
                    <td>{{$laboratory->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
