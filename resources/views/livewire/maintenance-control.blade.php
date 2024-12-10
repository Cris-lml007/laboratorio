<div>
    <h5 class="modal-title">Información</h5>
    <div class="input-group">
        <span class="input-group-text">Encargado</span>
        <input readonly type="text" class="form-control" wire:model="manager">
    </div>
    <div class="input-group">
        <span class="input-group-text">Id Laboratorio</span>
        <input readonly type="text" class="form-control" wire:model="id_lab">
        <span class="input-group-text">Bloque</span>
        <input readonly type="text" class="form-control" wire:model="block">
    </div>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input readonly type="text" class="form-control" wire:model="name_lab">
    </div>
    <h5 class="modal-title">Activos</h5>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Operativo</th>
        </thead>
        <tbody>
            @foreach ($this->laboratory?->assets ?? [] as $item)
                @php
                if($this->verify($item->id)) break;
                @endphp
                <tr data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                                                                aria-controls="collapseExample" wire:click="getAsset({{$item->id}})">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type ? $item->type->name : '---' }}</td>
                    <td>
                        <i @class([
                            'fa',
                            'fa-circle',
                            'text-danger' => !$item->operative,
                            'text-success' => $item->operative,
                        ])></i>
                    </td>
                </tr>
                <tr class="collapse" id="collapseExample">
                    <td colspan="4" class="bg-secondary">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-floating">
                                    <textarea wire:model="detail" class="form-control" id="detail"></textarea>
                                    <label for="detail">Detalle Mantenimiento</label>
                                </div>
                                <div class="form-floating">
                                    <textarea wire:model="description" class="form-control" id="description"></textarea>
                                    <label for="description">Descripción Activo</label>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Laboratorio</span>
                                    <select wire:model="lab" class="form-select">
                                        <option value="null">seleccione</option>
                                        @foreach ($laboratories ?? [] as $lab)
                                        <option value="{{$lab->id}}">{{$lab->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="is_operative" type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Operativo</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    <button wire:click="restart" class="btn btn-secondary" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">Cancelar</button>
                                    <button wire:click="save" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal-footer">
        <button wire:click="finish" class="btn btn-secondary" data-bs-dismiss="modal">Finalizar</button>
    </div>
</div>
