<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;

class Uptade extends Component
{

    public $user_id, $name, $email, $password, $users;


    public function uptade() {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $this->users = User::findOrFail($this->user_id);

        $this->users->uptade([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->closeModalEdit();
        $this->resetInputFields();

    }
    public function render()
    {
        return view('livewire.users.uptade');
    }
}
