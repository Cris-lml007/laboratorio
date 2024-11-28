<?php

namespace App\Livewire;

use App\Models\Laboratory;
use Livewire\Component;
use Livewire\WithPagination;

class LaboratoryTable extends Component
{
    public $listeners = ['update'];

    public function getLaboratory($id){
        $this->dispatch('getLaboratory',$id);
    }

    public function getlaboratories(){
        return Laboratory::all();
    }


    use WithPagination;
    public function render()
    {
        // $Laboratories
        return view('livewire.laboratory-table');
    }
}
