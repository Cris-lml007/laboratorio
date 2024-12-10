@extends('adminlte::page')

@section('content_header')
<h1>Laboratorio {{$laboratory->name}}</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Información</h5>
        <div class="input-group">
            <span class="input-group-text">Encargado</span>
            <input readonly type="text" class="form-control" value="{{($laboratory?->manager?->surname ?? '') . ' ' . ($laboratory?->manager?->name ?? '')}}">
        </div>
        <div class="input-group">
            <span class="input-group-text">Id Laboratorio</span>
            <input readonly type="text" class="form-control" value="{{$laboratory->id}}">
            <span class="input-group-text">Bloque</span>
            <input readonly type="text" class="form-control" value="{{$laboratory->block}}">
        </div>
        <div class="input-group">
            <span class="input-group-text">Nombre</span>
            <input readonly type="text" class="form-control" value="{{$laboratory->name}}">
        </div>
    </div>
</div>
{{-- <div class="d-flex justify-content-end mb-1"> --}}
{{--     <button class="btn btn-success" data-bs-target="#modalActive" data-bs-toggle="modal"> --}}
{{--         <i class="fa fa-plus"></i> Añadir Activo --}}
{{--     </button> --}}
{{-- </div> --}}
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Activos</h5>
        <livewire:asset-table idLab="{{$laboratory->id}}">
        </livewire:asset-table>
    </div>
</div>

<div class="d-flex justify-content-end mb-1">
    <button class="btn btn-success" data-bs-target="#modalMaintenance" data-bs-toggle="modal">
        <i class="fa fa-plus"></i> Añadir Manteniminento
    </button>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Mantenimientos</h5>
        <livewire:maintenance-table>
        </livewire:maintenance-table>
    </div>
</div>

<x-modal id="modalActive" title="Activo">
    <livewire:asset-form></livewire:asset-form>
</x-modal>

<x-modal id="modalMaintenance" title="Añadir Mantenimiento" class="modal-lg">
    <livewire:maintenance-form laboratory="{{$laboratory->id}}">
    </livewire:maintenance-form>
</x-modal>
@endsection
