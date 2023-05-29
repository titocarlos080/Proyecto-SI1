<div>
    <div class="form-group px-4 pt-2">
        <i class="fas fa-user-plus fa-2x"></i>
        <h3 class="fs-1 d-inline-block ml-1">Crear Nuevo Paquete</h3>
    </div>
    <form class="px-4 pt-2 pb-4">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre paquete" wire:model="nombre">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <textarea placeholder="Describe con un comentario de referencia ..." class="w-100 h-10" type="text" name="descripcion" wire:model="descripcion">
                </textarea> 
        </div>
        <div class="text-right mt-2">
            <button wire:click="cancelarCreacion()" class="btn-cancel btn-danger" type="button" name="cancelar">Cancelar</button>
            <button wire:click.prevent="guardarRegistro()" class="btn-confirm btn-primary" type="button" name="guardar">Guardar Paquete</button>
        </div>

    </form>
    {{-- Be like water. --}}
</div>