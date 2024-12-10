@extends('adminlte::page')

@section('content_header')
<h1>Gestion de Usuarios</h1>
@endsection

@section('content')
<div class="d-flex justify-content-end mb-1">
    <button data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-success">
        <i class="fa fa-plus"></i>
         Añadir Usuario
    </button>
</div>
<livewire:user-table></livewire:user-table>

<x-modal id="modal" title="Añadir Usuario" class="modal-xl">
    <livewire:user-form></livewire:user-form>
</x-modal>
@endsection
