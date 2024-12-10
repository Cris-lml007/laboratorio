<div class="card">
    <div class="card-body">
        <table class="table table-striped" @update="$refresh">
            <thead>
                <th>Id</th>
                <th>Laboratorio</th>
                <th>Tipo</th>
            </thead>
            <tbody>
                @foreach ($maintenances as $item)
                <tr data-bs-toggle="modal" data-bs-target="#modal" style="cursor: pointer;" wire:click="getControl({{$item->laboratory->id}},{{$item->id}})">
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
