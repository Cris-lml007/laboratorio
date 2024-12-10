<?php

namespace App\Livewire;

use App\Models\Maintenance;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MaintenanceForm extends Component
{

    public $id;
    public $date;
    public $type;
    public $description;
    public $laboratory;

    public $listeners = ['getMaintenance' => 'getMaintenance','destroy'=>'destroy'];

    public function getMaintenance($id){
        $maintenance = Maintenance::find($id);
        $this->id = $maintenance->id;
        $this->date = $maintenance->date;
        $this->type = $maintenance->type;
        $this->description = $maintenance->description;
    }

    public function mount($laboratory){
        $this->laboratory = $laboratory;
    }

    public function updateOrCreate(){
        Maintenance::updateOrCreate([
            'id' => $this->id,
            'user_id' => Auth::user()->id,
            'laboratory_id' => $this->laboratory
        ],[
            'date' => $this->date,
            'type' => $this->type,
            'description' => $this->description
        ]);
        $this->dispatch('updateMaintenance');
    }

    public function destroy($id){
        Maintenance::destroy($id);
        $this->dispatch('updateMaintenance');
    }


    public function render()
    {
        return view('livewire.maintenance-form');
    }
}
