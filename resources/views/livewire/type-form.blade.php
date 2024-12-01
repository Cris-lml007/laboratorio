<div>
    <div class="input-group">
        <span class="input-group-text">Nombre</span>
        <input wire:model="name" class="form-control" type="text">
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button wire:click="updateOrCreate" class="btn btn-success">Guardar</button>
    </div>
</div>
