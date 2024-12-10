<?php

namespace App\Livewire\Users;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\{Url};
use Livewire\Attributes\On;

class Table extends Component
{


    public $search = '';
    public $pUserPerPage = 5;


    #[On('usuarioDeletado')]
    #[On('usuarioCriado')]


    public function render()
    {

        $results = [];


        if(strlen($this->search) >= 1) {
            $results = User::where('name', 'like', '%' . $this->search . '%')->limit(5)->get();}


        return view('livewire.users.table',['users' => User::orderBy('id', 'desc')->paginate($this->pUserPerPage), 'usersSearch' => $results]);
    }


}
