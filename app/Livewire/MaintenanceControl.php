<?php

namespace App\Livewire;

use App\Models\Asset;
use App\Models\AssetOld;
use App\Models\DetailMaintenance;
use App\Models\Laboratory;
use App\Models\Maintenance;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MaintenanceControl extends Component
{
    public $maintenance;
    public $manager;
    public $id_lab;
    public $block;
    public $name_lab;
    public $laboratory;

    public $detail;
    public $description;
    public $lab;
    public $is_operative;
    public $laboratories;
    public $asset;

    public $listeners = ['getLaboratory' => 'getLaboratory'];

    public function verify($id){
        return DetailMaintenance::where('maintenance_id',$this->maintenance)->where('asset_id',$id)->exists();
    }

    public function getLaboratory($id,$maintenance){
        $this->maintenance = $maintenance;
        $this->laboratory = Laboratory::find($id);
        $this->id_lab = $this->laboratory->id;
        $this->block = $this->laboratory->block;
        $this->name_lab = $this->laboratory->name;
        $this->manager = $this->laboratory->manager->surname. ' ' . $this->laboratory->manager->name;
        $this->laboratories = Auth::user()->teacher->laboratories;
    }

    public function save(){
        $this->asset->description = $this->description;
        $this->asset->laboratory_id = $this->laboratory->id;
        $this->asset->operative = $this->is_operative ? 1 : 0;
        DetailMaintenance::create([
            'maintenance_id' => $this->maintenance,
            'asset_id' => $this->asset->id,
            'description' => $this->detail
        ]);
        if($this->asset->isDirty()){
            $asset = Asset::find($this->asset->id);
            AssetOld::create([
                'name' => $asset->name,
                'description' => $asset->description,
                'price' => $asset->price,
                'laboratory_id' => $asset->laboratory_id,
                'type_id' => $asset->type_id,
                'operative' => $asset->operative,
                'user_id' => $asset->user_id
            ]);
            $this->asset->save();
        }
        $this->restart();
    }

    public function getAsset($id){
        $this->asset = Asset::find($id);
        $this->description = $this->asset->description;
        $this->lab = $this->asset->laboratory->id;
        $this->is_operative = $this->asset->operative == 1 ? true : false;
    }

    public function finish(){
        Maintenance::find($this->maintenance)->update(['active'=>0]);
        $this->restartAll();
        $this->dispatch('update');
    }

    public function restart(){
        $this->reset(['detail','description','lab','is_operative','asset']);
    }

    public function restartAll(){
        $this->restart();
    }

    public function render()
    {
        return view('livewire.maintenance-control');
    }
}
