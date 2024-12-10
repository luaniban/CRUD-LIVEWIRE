<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class Edit extends Component
{

    public $users, $name, $email, $password, $user_id;
    public $modalEdit = false;


    public function openModalEdit()
    {
        $this->modalEdit = true;
    }


    public function closeModalEdit()
    {
        $this->modalEdit = false;
    }


    // #[On('funciona')]
    // public function funciona($id)
    // {
    //     dd($id);
    //     $user = User::findOrFail($id);


    //     $this->user_id = $user->id;
    //     $this->name = $user->name;
    //     $this->email = $user->email;
    //     $this->password = '';


    //     $this->openModalEdit();
    // }



   // protected $listeners = ['editar-usuario' => 'edit'];
   #[On('post-edit')]
    public function edit($id)
    {



        $user = User::findOrFail($id);


        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';


        $this->openModalEdit();
    }

    public function update()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',

            //|email|max:255',
            'password' => 'nullable|min:6',
        ]);


        $user = User::findOrFail($this->user_id);

        //dd($user);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? bcrypt($this->password) : $user->password,
        ]);

        //dd('funciona');

        //$this->closeModalEdit();
        //$this->reset(['name', 'email', 'password', 'user_id']);

        $this->redirectIntended('/user');
    }


    public function render()
    {
        return view('livewire.users.edit');
    }
}
