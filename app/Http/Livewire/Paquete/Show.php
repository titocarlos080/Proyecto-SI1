<?php

namespace App\Http\Livewire\Paquete;

use App\Models\Paquete;
use Livewire\Component;

class Show extends Component
{   
    public $search='';
    public $vistaFormulario = false;
    public $mostrarFormularioEditar = false;

    public $paquetes,$paqueteSelccionado;
    protected $listeners=[ 'registroActualizado','registroGuardado','cancelarEdicion','cancelarGuardado'];

    public function buscar()
    {
        $this->paquetes=Paquete::where('nombre','like','%'.$this->search.'%')->get();
        # code...
    }

    public function mount()
    {
        $this->paquetes = Paquete::all();
        # code...
    } 
    public function registroActualizado( )
    {
        $this->mostrarFormularioEditar =false;
        $this->vistaFormulario =false;

        # code...
    } 
     public function cancelarEdicion( )
    {
        $this->mostrarFormularioEditar =false;
        $this->vistaFormulario =false;

        # code...
    } public function cancelarGuardado( )
    {
        $this->mostrarFormularioEditar =false;
        $this->vistaFormulario =false;

        # code...
    }
    public function registroGuardado()
    {
        $this->vistaFormulario = false;
        $this->mostrarFormularioEditar =false;
         $this->mount();

        # code...
    }
    public function agregarNuevo()
    {
        $this->vistaFormulario = true;
    }
    public function editarRegistro($idPaquete)
    {
        $this->paqueteSelccionado= Paquete::findOrfail($idPaquete);
         $this->emit( 'editarRegistro',$this->paqueteSelccionado);
        $this->mostrarFormularioEditar = true;
        # code...
    }
   public function eliminarRegistro($id)
   {
    
    Paquete::destroy($id);
    $this->mount();
    # code...
   }
    public function render()
    {
        return view('livewire.paquete.show');
    }
}
