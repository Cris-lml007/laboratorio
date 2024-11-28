<?php

namespace App\Livewire;

use App\Models\Laboratory;
use App\Models\User;
use Livewire\Component;

class LaboratoryForm extends Component
{
    public $name;
    public $block;
    public $manager;
    public $description;

    public $laboratory;

    public $listeners = ['getLaboratory','getLaboratory'];

    public function getLaboratory(Laboratory $laboratory){
        $this->name = $laboratory->name;
        $this->block = $laboratory->block;
        $this->description = $laboratory->description;
        $this->manager = $laboratory->manager->id ?? null;
    }

    public function updateOrCreate(){
        Laboratory::updateOrCreate(
            [
                'name' =>$this->name,
                'block'=>$this->block
            ],
            [
                'description'=>$this->description,
                'teacher_id'=>$this->manager == 'null' ? null : $this->manager
            ]
        );
        $this->dispatch('update');
    }

    public function getManagers(){
        return User::all();
    }

    public function restart(){
        $this->reset();
    }

    public function render()
    {
        return view('livewire.laboratory-form');
    }
}
