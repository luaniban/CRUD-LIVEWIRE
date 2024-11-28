<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Disciplina;
use Livewire\WithPagination;

class Disciplinas extends Component
{

    use WithPagination;
    public $disciplina,$disciplinas, $name, $shortname, $code, $is_integral, $disciplina_id, $id, $disciplina_paginate;
    public $modalCreate = 0;
    public $modalEdit = 0;
    public $pdisciplinaPerPage = 5;

    public function render()
    {


        //$this->disciplinas = Disciplina::all();
        //dd($this->disciplinas);
        return view('livewire.Disciplina.disciplinas', ['pdisciplina' => Disciplina::orderBy('id', 'asc')->paginate($this->pdisciplinaPerPage)]);
    }



    public function openModalEdit()
    {
        $this->modalEdit = true;
    }
    public function closeModalEdit()
    {
        $this->modalEdit = false;
    }


    public function create()
    {
        $this->resetInputFields();
        $this->openModalCreate();
    }

    public function openModalCreate()
    {
        $this->modalCreate = true;
    }


    public function closeModalCreate()
    {
        $this->modalCreate = false;
    }

    private function resetInputFields(){
        $this->name = '';
        $this->shortname = '';
        $this->code = '';
        $this->is_integral = '';

    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'shortname' => 'required',
            'code' => 'required',
            'is_integral' => 'required',


        ]);

        Disciplina::create([
            'name' => $this->name,
            'shortname' => $this->shortname,
            'code' => $this->code,
            'is_integral' => $this->is_integral,
        ]);

        $this->closeModalCreate();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $this->disciplina_id = $id;
        $this->name = $disciplina->name;
        $this->shortname = $disciplina->shortname;
        $this->code = $disciplina->code;
        $this->is_integral = $disciplina->is_integral;


        $this->openModalEdit();


    }

    public function update()
    {



        $this->validate([
            'name' => 'required',
            'shortname' => 'required',
            'code' => 'required',
            'is_integral' => 'required',

        ]);

        $disciplinas = Disciplina::findOrFail($this->disciplina_id);


        $disciplinas->update([
            'name' => $this->name,
            'shortname' => $this->shortname,
            'code' => $this->code,
            'is_integral' => $this->is_integral,

        ]);




        $this->closeModalEdit();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Disciplina::find($id)->delete();
    }
}
