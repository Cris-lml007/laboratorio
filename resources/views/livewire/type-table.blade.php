<div>
    <table class="table table-striped" @updateType="$refresh">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
        </thead>
        <tbody>
            @foreach ($types ?? [] as $type)
            <tr style="cursor: pointer;" wire:click="getType({{$type->id}})" data-bs-toggle="modal" data-bs-target="#modalType">
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer">
        {{$types->links() ?? ''}}
    </div>
</div>
