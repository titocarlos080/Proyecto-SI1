<?php

namespace App\Http\Livewire\TipoMaquina;

use Livewire\Component;
use App\Models\Tipo_Maquina;

class Edit extends Component
{
    public $registroSeleccionado;

    protected $listeners = ['editarRegistro'];

    protected $rules = [
        'registroSeleccionado.nombre' => 'required|max:50',
        'registroSeleccionado.descripcion' => 'required|max:150'
    ];

    public function editarRegistro($registroSeleccionado)
    {
        $this->registroSeleccionado = $registroSeleccionado;
    }

    public function cancelar()
    {
        $this->emit('cancelarEdicion');
    }

    public function actualizarMaquina() 
    {
        $this->validate();
    
        // Realizar la actualización del registro seleccionado
        $registro = Tipo_Maquina::find($this->registroSeleccionado['id']);
        $registro->nombre = $this->registroSeleccionado['nombre'];
        $registro->descripcion = $this->registroSeleccionado['descripcion'];
        $registro->save();
    
        $this->emitTo('tipo-maquina.show','render');
        $this->emit('registroActualizado');

        // Limpiar la propiedad $registroSeleccionado
        $this->registroSeleccionado = null;

    }

    public function render()
    {
        return view('livewire.tipo-maquina.edit');
    }
}
