<div>

    @if ($vistaFormulario)
        <livewire:paquete.create>
    @elseif ($mostrarFormularioEditar)
        <livewire:paquete.edit>
    @else
        <div class="table-responsive">
            <div class="mb-2 d-flex justify-content-between">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group"> 
                            <input type="text" wire:model='search' wire:keydown='buscar()' class="form-control" placeholder="Buscar...">
                            <div class="input-group-append">
                                <button class="btn text-secondary" type="">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <button type="button" wire:click="agregarNuevo" class="btn btn-primary waves-effect waves-light">
                    <i class="fas fa-plus-circle"></i>&nbsp;
                    Nuevo Paquete
                </button>

            </div>

            <table class="table table-bordered mb-0">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                         <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paquetes as $paquete)
                        <tr class="text-wrap">
                            <th scope="row" class="align-middle">{{ $paquete->id }}</th>
                            <td class="align-middle">{{ $paquete->nombre }}</td>
                            <td class="align-middle">{{ $paquete->descripcion }}</td>
                             <td class="align-middle d-flex">
                                <button type="button" wire:click="editarRegistro({{$paquete->id}})"  class="btn btn-sm btn-primary ml-1 mr-1">Editar</button>
                                <button type="button" wire:click="eliminarRegistro({{$paquete->id}})"  class="btn btn-sm btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endif

</div>
