<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;


class Delete extends Component
{


    //protected $listeners = ['deletarUsuario'];
    #[On('post-delete')]
    public function delete($id){

       User::find($id)->delete();
       $this->dispatch('usuarioDeletado');
    }
    public function render()
    {
        return view('livewire.users.delete');
    }
}
