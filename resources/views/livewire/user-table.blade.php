<div class="card">
    <div class="card-body">
        <table class="table table-striped" @update="$refresh">
            <thead>
                <th>CI</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Rol</th>
                <th>Estado</th>
            </thead>
            <tbody>
                @foreach ($users ?? [] as $user)
                <tr>
                    <td>{{$user->teacher->ci}}</td>
                    <td>{{$user->teacher->surname ?? '---'}}</td>
                    <td>{{$user->teacher->name ?? '---'}}</td>
                    <td>{{$user->role ?? '---'}}</td>
                    <td>
                        <button wire:click="getUser({{$user->id}})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button wire:click="toggleActive({{$user->id}})" @class(['btn','btn-danger' => !$user->active, 'btn-success' => $user->active]) >
                            <i class="fa fa-power-off"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
