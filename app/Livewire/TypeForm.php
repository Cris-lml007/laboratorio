<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Component;

class TypeForm extends Component
{

    public $id;
    public $name;

    public $listeners = ['getType' => 'getType'];

    public function updateOrCreate(){
        Type::updateOrCreate([
            'id' => $this->id ?? null
        ],[
            'name' => $this->name
        ]);
        $this->dispatch('updateType');
        $this->dispatch('closeModal');
    }


    public function getType(Type $type){
        $this->id = $type->id;
        $this->name = $type->name;
    }

    public function render()
    {
        return view('livewire.type-form');
    }
}
