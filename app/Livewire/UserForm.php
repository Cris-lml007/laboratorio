<?php

namespace App\Livewire;

use App\Models\Teacher;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserForm extends Component
{

    public $id;
    public $ci;
    #[Validate('required|string')]
    public $surname;
    #[Validate('required|string')]
    public $name;
    #[Validate('required|email')]
    public $email;
    public $cellular;
    #[Validate('required|integer')]
    public $role;
    public $specialty;

    public $isSave = false;
    public User $user;

    public $listeners = [
        'get' => 'getUser'
    ];

    protected function rules()
    {
        return [
            'ci' => 'required|integer|unique:teachers,ci,' . $this->id,
            'email' => 'required|unique:users,email,'.($this->user ? $this->user->id : null)
        ];
    }

    public function mount(){
        $this->user = new User();
    }

    public function restart(){
        $this->reset();
    }

    public function getUser($id){
        $this->clearValidation();
        $this->user = User::find($id);
        $this->id = $this->user->id;
        $this->ci = $this->user->teacher->ci;
        $this->surname = $this->user->teacher->surname;
        $this->name = $this->user->teacher->name;
        $this->cellular = $this->user->teacher->cellular;
        $this->specialty = $this->user->teacher->specialty;
        $this->role = $this->user->role;
        $this->email = $this->user->email;
        $this->isSave = false;
    }

    public function updateOrCreate(){
        $this->validate();
        Teacher::updateOrCreate(
            [
                'ci' => $this->ci,
                'surname' => $this->surname,
                'name' => $this->name,
                'cellular' => $this->cellular,
                'specialty' => $this->specialty
            ],
            [
                'ci' => $this->ci
            ]
        )->user()->updateOrCreate(
            [
                'role' => $this->role,
                'email' => $this->email,
                'password' => $this->id ? User::find($this->id)->password : rand(11111111,99999999)
            ],
            [
                'email' => $this->email
            ]
        );
        $this->isSave = true;
        $this->dispatch('update');
    }


    public function render()
    {
        return view('livewire.user-form');
    }
}
