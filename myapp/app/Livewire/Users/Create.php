<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $name, $email, $password;

    public $modalCreate = false;

    public function openModalCreate(){
        $this->modalCreate = true;
    }

    public function closeModalCreate(){
        $this->modalCreate = false;
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email= '';
        $this->password = '';
    }


    public function create(){
        $this->resetInputFields();
        $this->openModalCreate();
    }

    public function store() {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->closeModalCreate();
        $this->resetInputFields();
    }


    public function render()
    {
        return view('livewire.users.create');
    }


}

