<?php

namespace App\Http\Livewire;

use App\Models\Mascota;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class Mascotas extends Component
{
    
    protected $listeners = ['render' => 'render'];
    public function delete(Mascota $mascota){
        $mascota->delete();
    }

    public function render()
    {
        $mascotas = Mascota::orderBy('id','desc')->get();
        return view('livewire.mascotas',compact('mascotas'));
    }
}
