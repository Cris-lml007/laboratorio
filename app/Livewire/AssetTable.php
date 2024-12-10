<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\Laboratory;
use Livewire\Component;
use Livewire\WithPagination;

class AssetTable extends Component
{
    public $laboratory;

    public $listeners = ['updateAsset'];

    public function mount($idLab = null){
        $this->laboratory = Laboratory::find($idLab);
    }

    public function getAsset($id){
        $this->dispatch('getAsset',$id);
    }

    use WithPagination;
    public function render()
    {
        if($this->laboratory != null){
            $assets = $this->laboratory->assets()->paginate();
        }else{
            $assets = Asset::paginate();
        }
        return view('livewire.asset-table',compact(['assets']));
    }
}
