<div>
    <div class="input-group">
        <span class="input-group-text">Fecha</span>
        <input wire:model="date" type="date" class="form-control">
    </div>
    <div class="input-group">
        <span class="input-group-text">Tipo</span>
        <select wire:model="type" class="form-select">
            <option value="0">Seleccione</option>
            <option value="1">Mantenimiento Preventivo</option>
            <option value="2">Mantenimiento Correctivo</option>
        </select>
    </div>
    <div class="mt-1">
        <label class="form-label" for="des">Descripción</label>
        <textarea wire:model="description" class="form-control" id="des" rows="3">
        </textarea>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button wire:click="updateOrCreate" class="btn btn-success">Guardar</button>
    </div>
</div>
