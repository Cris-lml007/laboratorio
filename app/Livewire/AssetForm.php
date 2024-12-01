<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\Laboratory;
use App\Models\Type;
use Livewire\Component;

class AssetForm extends Component
{

    public $id;
    public $name;
    public $description;
    public $price;
    public $is_operative;

    public $type;
    public $laboratory;

    public $listeners = ['getAsset' => 'getAsset'];

    public function updateOrCreate(){
        Asset::updateOrCreate([
            'id' => $this->id ?? null,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ],[
            'operative' => $this->is_operative == 1 ? true : false,
            'type_id' => $this->type,
            'laboratory_id' => $this->laboratory
        ]);
        $this->reset();
        $this->dispatch('updateAsset');
        $this->dispatch('closeModal');
    }

    public function getAsset(Asset $asset){
        $this->id = $asset->id;
        $this->name = $asset->name;
        $this->description = $asset->description;
        $this->price = $asset->price;
        $this->is_operative = $asset->operative == 1 ? true : false;
        $this->type = $asset->type ?? null;
        $this->laboratory = $asset->laboratory ?? null;
    }

    public function restart(){
        $this->reset();
    }

    public function render()
    {
        $laboratories = Laboratory::all();
        $types = Type::all();
        return view('livewire.asset-form',compact(['laboratories','types']));
    }
}
