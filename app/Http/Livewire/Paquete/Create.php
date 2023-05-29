<?php

namespace App\Http\Livewire\Paquete;

use Livewire\Component;
use App\Models\Paquete;
class Create extends Component
{  
   public $nombre,$descripcion;
   protected $rules=['nombre'=>'required','descripcion'];


  public function guardarRegistro()
  {   
      Paquete::create([
        'nombre'=>$this->nombre,
        'descripcion'=>$this->descripcion
     ]);
     
    $this->emitTo('paquete.show','render');
     $this->emit('registroGuardado');

    # code...
  } 
 
   public function cancelarCreacion( ){

    $this->emit('cancelarGuardado');
   }   # code...
   
    public function render()
    {
        return view('livewire.paquete.create');
    }
}
