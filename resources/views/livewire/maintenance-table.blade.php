@php
    use Carbon\Carbon;
@endphp

<div>
    <table class="table table-striped" @updateMaintenance="$refresh">
        <thead>
            <th>Id</th>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Estado</th>
        </thead>
        <tbody>
            @foreach ($maintenances ?? [] as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{Carbon::parse($item->date)->toDateString()}}</td>
                <td>{{$item->type == 1 ? 'Preventivo' : 'Correctivo'}}</td>
                <td>
                    <button wire:click="getMaintenance({{$item->id}})" class="btn btn-primary" data-bs-target="#modalMaintenance" data-bs-toggle="modal">
                        <i class="fa fa-eye"></i>
                    </button>
                    <button wire:click="destroy({{$item->id}})" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
                <td>{{$item->active ? 'En Progreso' : 'Finalizado'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer">
        {{$maintenances?->links() ?? ''}}
    </div>
</div>
