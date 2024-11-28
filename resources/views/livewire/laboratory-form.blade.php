<div>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input wire:model="name" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Bloque</span>
        <input wire:model="block" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Encargado</span>
        <select wire:model="manager" class="form-select">
            <option value="null">Seleccione</option>
            @foreach ($this->getManagers() ?? [] as $m)
            <option value="{{$m->teacher->id}}">{{ $m->teacher->surname.' '.$m->teacher->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-floating">
        <textarea wire:model="description" class="form-control" id="observations"></textarea>
        <label for="observations">Descripcion</label>
    </div>
    <div class="modal-footer px-0">
        <button wire:click="restart" class="btn-secondary btn" data-bs-dismiss="modal">Cerrar</button>
        <button wire:click="updateOrCreate" class="btn-success btn" data-bs-dismiss="modal">Guardar</button>
    </div>
</div>
