<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\{Url};
use Livewire\Attributes\On;

class Table extends Component
{



    public $user_id, $name, $email, $password;

    public $search = '';
    public $pUserPerPage = 5;


    public function render()
    {

        $users = User::all();
        return view('livewire.users.table', compact('users'));
    }


}
