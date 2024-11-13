<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class LaboratoryTable extends Component
{
    public $listeners = ['update'];

    public function getlaboratory($id){
        $this->dispatch('get',$id);
    }


    use WithPagination;
    public function render()
    {
        // $Laboratories
        return view('livewire.laboratory-table');
    }
}
