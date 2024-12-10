<?php

namespace App\Livewire;

use App\Models\Maintenance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ControlTable extends Component
{

    public $listeners = ['update'];

    public function getControl($id,$maintenance){
        $this->dispatch('getLaboratory',$id,$maintenance);
    }


    use WithPagination;
    public function render()
    {
        $maintenances = Maintenance::whereHas('laboratory',function($query){
            $query->where('teacher_id',Auth::user()->teacher->id);
        })->where('date',Carbon::now()->toDateString())->where('active',1)->paginate(10);
        return view('livewire.control-table',compact(['maintenances']));
    }
}
