@extends('adminlte::page')

@section('content_header')
<h1>Gestión de Laboratorios</h1>
@endsection

@section('content')
<div class="d-flex justify-content-end mb-1">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">
        <i class="fa fa-plus"></i>
        Añadir Laboratorio
    </button>
</div>
<livewire:laboratory-table></livewire:laboratory-table>

<x-modal id="modal" title="Añadir Laboratorio">
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Bloque</span>
        <input class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Encargado</span>
        <select class="form-select">
            <option value="">Seleccione</option>
        </select>
    </div>
    <div class="form-floating">
        <textarea class="form-control" id="observations"></textarea>
        <label for="observations">Descripcion</label>
    </div>
    <div class="modal-footer px-0">
        <button wire:click="restart" class="btn-secondary btn" data-bs-dismiss="modal">Cerrar</button>
        <button wire:click="restart" class="btn-success btn" data-bs-dismiss="modal">Guardar</button>
    </div>
</x-modal>
@endsection
