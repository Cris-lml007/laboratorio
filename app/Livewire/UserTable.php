<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{

    public $listeners = ['update'];

    public function toggleActive(User $user){
        $user->active = !$user->active;
        $user->save();
    }

    public function getUser($id){
        $this->dispatch('get',$id);
    }

    use WithPagination;
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.user-table',compact(['users']));
    }
}
