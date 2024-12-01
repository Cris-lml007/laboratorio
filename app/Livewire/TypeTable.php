<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypeTable extends Component
{

    public $listeners = ['updateType'];

    public function getType($id){
        $this->dispatch('getType',$id);
    }

    use WithPagination;
    public function render()
    {
        $types = Type::paginate();
        return view('livewire.type-table',compact(['types']));
    }
}
