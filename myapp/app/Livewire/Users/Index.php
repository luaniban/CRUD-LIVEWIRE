<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{

    public $modalCreate = false;
    public $modalEdit = false;

    public function openModalCreate() {
        $this->modalCreate = true;
    }
    public function openModalEdit() {
        $this->modalEdit = true;
    }

    public function closeModalCreate() {
        $this->modalCreate = false;
    }

    public function closeModalEdit() {
        $this->modalEdit = false;
    }

    public $search = '';
    public $pUserPerPage = 5;



    public function render()
    {

        return view('livewire.users.index');
    }


}
