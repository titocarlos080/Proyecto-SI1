<div>
    <div class="form-group px-4 pt-2">
        <i class="fas fa-user-plus fa-2x"></i>
        <h3 class="fs-1 d-inline-block ml-1">Editar Paquete</h3>
    </div>
    @if ($paqueteSeleccionado)
        <form  class="px-4 pt-2 pb-4">
             <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" wire:model="paqueteSeleccionado.nombre">
                @error('paqueteSeleccionado.nombre')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="descripcion">Descripción</label>
                <textarea class="w-100 h-10" type="text" name="descripcion" wire:model="paqueteSeleccionado.descripcion"> 

                </textarea>
                @error('paqueteSeleccionado.descripcion')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="text-right mt-2">
            <button wire:click="cancelarEdicion()" class="btn-cancel btn-danger" type="button" name="cancelar">Cancelar</button>
            <button wire:click.prevent="guardarRegistro()" class="btn-confirm btn-primary" type="button" name="guardar">Actualizar Paquete</button>

            </div>
           
        </form>
    @else
        <p>No se ha seleccionado ningún paquete.</p>
    @endif
</div>
