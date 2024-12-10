@extends('adminlte::page')

@section('content_header')
<h1>Manteniminento</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Laboratorio</th>
                <th>Tipo</th>
            </thead>
            <tbody>
                @foreach ($maintenances as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->laboratory->name}}</td>
                    <td>{{$item->type == 1 ? 'Manteniminento Preventivo' : 'Manteniminento Correctivo'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$maintenances?->links() ?? ''}}
    </div>
</div>
@endsection
