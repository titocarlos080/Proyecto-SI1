<?php

namespace App\Http\Livewire\Paquete;

use App\Models\Paquete;
use Livewire\Component;

class Edit extends Component
{

    public $paqueteSeleccionado;
    protected $listeners = ['editarRegistro'];
    protected $rules = [
        'paqueteSeleccionado.nombre' => 'required',
        'paqueteSeleccionado.descripcion' => 'required'
    ];

    public function editarRegistro($datos)
    {
        $this->paqueteSeleccionado = $datos;

        # code...
    }
    //guardarPaquete
    public function guardarRegistro()
    {        

        $this->validate();
        $paquete = Paquete::find($this->paqueteSeleccionado['id']);
        $paquete->nombre = $this->paqueteSeleccionado['nombre'];
        $paquete->descripcion = $this->paqueteSeleccionado['descripcion'];
        $paquete->save();   //actualizar 
        $this->paqueteSeleccionado = null;
        $this->emitTo('paquete.show', 'render');

        $this->emit('registroActualizado');
         # code...
    }
    public function cancelarEdicion()
    {
        $this->emit('cancelarEdicion');
        # code...
    }
    public function cancelarGuardado()
    {
        $this->emit('cancelarGuardado');
        # code...
    }

    public function render()
    {
        return view('livewire.paquete.edit');
    }
}
