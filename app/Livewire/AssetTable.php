<?php

namespace App\Livewire;

use App\Models\Asset;
use Livewire\Component;
use Livewire\WithPagination;

class AssetTable extends Component
{

    public $listeners = ['updateAsset'];

    public function getAsset($id){
        $this->dispatch('getAsset',$id);
    }

    use WithPagination;
    public function render()
    {
        $assets = Asset::paginate();
        return view('livewire.asset-table',compact(['assets']));
    }
}
