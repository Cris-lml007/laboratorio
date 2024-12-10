<?php

namespace App\Livewire;

use App\Models\Maintenance;
use Livewire\Component;
use Livewire\WithPagination;

class MaintenanceTable extends Component
{

    public $listeners = ['updateMaintenance'];

    public function getMaintenance($id){
        $this->dispatch('getMaintenance',$id);
    }

    public function destroy($id){
        $this->dispatch('destroy',$id);
    }

    use WithPagination;
    public function render()
    {
        $maintenances = Maintenance::paginate(10);
        return view('livewire.maintenance-table',compact(['maintenances']));
    }
}
