<div>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input wire:model="name" class="form-control" type="text">
    </div>
    <div class="input-group">
        <span class="input-group-text">Precio</span>
        <input wire:model="price" class="form-control" type="number">
    </div>
    <div class="form-floating">
        <textarea wire:model="description" class="form-control" id="description"></textarea>
        <label for="description">Descripcion</label>
    </div>
    <div class="input-group">
        <span class="input-group-text">Tipo</span>
        <select wire:model="type" class="form-select">
            <option value="null">seleccione</option>
            @foreach ($types ?? [] as $t)
            <option value="{{$t->id}}">{{$t->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-text">Laboratorio</span>
        <select wire:model="laboratory" class="form-select">
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
    <div class="modal-footer">
        <button wire:click="restart" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button wire:click="updateOrCreate" class="btn btn-success">Guardar</button>
    </div>
</div>


@script
    <script>
        $wire.on('closeModal', () => {
        $('#modalActive').modal('hide');
        });
    </script>
@endscript
