<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypeTable extends Component
{

    use WithPagination;
    public function render()
    {
        $types = Type::paginate();
        return view('livewire.type-table',compact(['types']));
    }
}
