<div>

    <div class="form-group px-4 pt-2">
        <i class="fas fa-user-plus fa-2x"></i>
        <h3 class="fs-1 d-inline-block ml-1">Editar Máquina</h3>
    </div>
    <form class="px-4 pt-2 pb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nombre" class="control-label">Nombre</label>
                    <input type="text" wire:model="registroSeleccionado.nombre" class="form-control" id="nombre"
                        placeholder="Ej: Máquina de aparatos">
                    @error('nombre')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <textarea wire:model="registroSeleccionado.descripcion" class="form-control" id="descripcion" rows="5"></textarea>
                    @error('descripcion')
                        <span class="error text-danger">* {{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group text-right m-b-0">
            <button type="reset" wire:click="cancelar" wire:loading.attr="disabled"
                class="btn btn-danger waves-effect m-l-5">
                Cancelar
            </button>
            <button class="btn btn-primary waves-effect waves-light" wire:click="actualizarMaquina" wire:loading.attr="disabled"  type="button">
                Actualizar
            </button>
        </div>
    </form>

</div>
