<div>

    <div class="form-group px-4 pt-2">
        <i class="fas fa-user-plus fa-2x"></i>
        <h3 class="fs-1 d-inline-block ml-1">Crear nuevo administrativo</h3>
    </div>
    <form wire:submit.prevent="guardarEmpleado" class="px-4 pt-2 pb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-1" class="control-label">Nombres</label>
                    <input type="text" wire:model="nombre" class="form-control" id="field-1" placeholder="John">
                    @error('nombre')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-2" class="control-label">Apellidos</label>
                    <input type="text" wire:model="apellido" class="form-control" id="field-2" placeholder="Doe">
                    @error('apellido')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="field-3" class="control-label">Email</label>
                    <input type="email" wire:model="email" class="form-control" id="field-3"
                        placeholder="jhondoe@gmail.com">
                    @error('email')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="field-8" class="control-label">Dirección</label>
                    <input type="text" wire:model="direccion" class="form-control" id="field-8"
                        placeholder="Av. Busch">
                    @error('direccion')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-4" class="control-label">Cédula de identidad</label>
                    <input type="number" wire:model="ci" class="form-control" id="field-4" placeholder="1234567">
                    @error('ci')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-5" class="control-label">Número telefónico</label>
                    <input type="number" wire:model="telefono" class="form-control" id="field-5"
                        placeholder="12345678">
                    @error('telefono')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-9" class="control-label">Fecha de nacimiento</label>
                    <input type="date" wire:model="fecha_nacimiento" class="form-control" id="field-9"
                        placeholder="1234567">
                    @error('fecha_nacimiento')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-10" class="control-label">Seleccionar imagen</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" wire:model="imagen" class="custom-file-input" id="field-10">
                            <label class="custom-file-label">Elija una foto</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-11" class="control-label">Cargo</label>
                    <select class="form-control" wire:model="cargo" name="cargo" id="field-11">
                        <option value="Administrador">Administrador</option>
                        <option value="Recepcionista">Recepcionista</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="field-12" class="control-label">Turno</label>
                    <select class="form-control" wire:model="turno" name="turno" id="field-12">
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Género</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" value="F" name="customRadio" wire:model="genero"
                            class="custom-control-input" id="femenino">
                        <label for="femenino" class="custom-control-label">Femenino</label>
                    </div>
                    <div class="custom-control custom-radio mt-1">
                        <input type="radio" value="M" name="customRadio" wire:model="genero"
                            class="custom-control-input" id="masculino">
                        <label for="masculino" class="custom-control-label">Masculino</label>
                    </div>
                </div>
                @error('genero')
                    <span class="error text-danger">* {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group text-right m-b-0">
            <button type="reset" wire:click="cancelar" wire:loading.attr="disabled" wire:target="cerrar"
                class="btn btn-danger waves-effect m-l-5">
                Cancelar
            </button>
            <button class="btn btn-primary waves-effect waves-light" type="submit">
                Guardar
            </button>
        </div>
    </form>

</div>
