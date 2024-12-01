<div>
    <table class="table table-striped" @updateAsset="$refresh">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Operativo</th>
        </thead>
        <tbody>
            @foreach ($assets ?? [] as $asset)
            <tr wire:click="getAsset({{$asset->id}})" data-bs-toggle="modal" data-bs-target="#modalActive" style="cursor: pointer;">
                <td>{{$asset->id}}</td>
                <td>{{$asset->name}}</td>
                <td>{{$asset->type->name ?? '---'}}</td>
                <td>
                    <i @class(['fa', 'fa-circle','text-danger' => !$asset->operative,'text-success' => $asset->operative])></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
