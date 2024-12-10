<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\{Url};
use Livewire\Attributes\On;

class Reset extends Component
{
    public $user;


    #[On('post-reset')]
    public function resetPassword($id){

        $user = User::findOrFail($id);
        $this->user = $user;

        $password = '1234';

        $this->user->password = $password;
        $this->user->save();
        $this->dispatch('reset');
        //dd($user->password);
        // dd($this->user);



    }
    public function render()
    {
        return view('livewire.users.reset');
    }
}
