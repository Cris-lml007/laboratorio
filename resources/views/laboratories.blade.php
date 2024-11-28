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
    <livewire:laboratory-form></livewire:laboratory-form>
</x-modal>
@endsection
