@extends('adminlte::page')
@section('content_header')
    <h1>Activos</h1>
@endsection

@section('content')
    <div class="d-flex justify-content-end mb-1">
        <button class="btn btn-success" data-bs-target="#modalActive" data-bs-toggle="modal">
            <i class="fa fa-plus"></i> Añadir Activo
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gestion de Activos</h5>
            <livewire:asset-table>
            </livewire:asset-table>
        </div>
    </div>
    <div class="d-flex justify-content-end mb-1">
        <button class="btn btn-success" data-bs-target="#modalType" data-bs-toggle="modal">
            <i class="fa fa-plus"></i> Añadir Tipo
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gestion de Tipos</h5>
            <livewire:type-table>
            </livewire:type-table>
        </div>
    </div>

    <x-modal id="modalActive" title="Añadir Activo">
        <livewire:asset-form></livewire:asset-form>
    </x-modal>

    <x-modal title="Añadir Tipo" id="modalType">
        <livewire:type-form></livewire:type-form>
    </x-modal>
@endsection
