@extends('adminlte::page')

@section('content_header')
<h1>Manteniminento</h1>
@endsection

@section('content')
<livewire:control-table>
</livewire:control-table>

<x-modal title="" id="modal" class="modal-xl">
    <livewire:maintenance-control>
    </livewire:maintenance-control>
</x-modal>

@endsection
