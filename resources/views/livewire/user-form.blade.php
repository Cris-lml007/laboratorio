<div>
    <div class="input-group">
        <span class="input-group-text">CI</span>
        <input wire:model.lazy="ci" class="form-control" type="number">
    </div>
    @error('ci')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Apellidos</span>
        <input wire:model="surname" class="form-control" type="text">
    </div>
    @error('surname')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Nombres</span>
        <input wire:model="name" class="form-control" type="text">
    </div>
    @error('name')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Celular</span>
        <input wire:model="cellular" class="form-control" type="number">
    </div>
    @error('cellular')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Especialidad</span>
        <input wire:model="specialty" class="form-control" type="text">
    </div>
    @error('specialty')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Correo Electronico</span>
        <input wire:model="email" class="form-control" type="email">
    </div>
    @error('email')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="input-group">
        <span class="input-group-text">Rol</span>
        <select wire:model="role" class="form-select">
            <option value="null">Seleccione</option>
            <option value="1">Administrador</option>
            <option value="2">Encargado de Laboratorio</option>
        </select>
    </div>
    @error('role')
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="modal-footer">
        <button wire:click="restart" class="btn btn-secondary" data-bs-dismiss="modal">{{$isSave ? 'Cerrar' : 'Cancelar'}}</button>
        @if (!$isSave)
            <button wire:click="updateOrCreate" class="btn btn-success">Registrar</button>
        @endif
    </div>
</div>
