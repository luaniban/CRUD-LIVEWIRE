<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Escola;

class Escolas extends Component
{
    public $escola,$escolas, $serie, $bimestre, $linguagem, $codigo, $descricao, $objeto_conhecimento, $discplina_id, $nivel_ensino, $origem, $escola_id, $id;
    public $modalCreate = 0;
    public $modalEdit = 0;

    public function render()
    {
        $this->escolas = Escola::all();
        return view('livewire.escolas');
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
        $this->serie = '';
        $this->bimestre = '';
        $this->linguagem = '';
        $this->codigo = '';
        $this->descricao = '';
        $this->objeto_conhecimento = '';
        $this->discplina_id = '';
        $this->nivel_ensino = '';
        $this->origem = '';

    }

    public function store()
    {
        $this->validate([
            'serie' => 'required',
            'bimestre' => 'required',
            'linguagem' => 'required',
            'codigo' => 'required',
            'descricao' => 'required',
            'objeto_conhecimento' => 'required',
            'discplina_id' => 'required',
            'nivel_ensino' => 'required',
            'origem' => 'required',

        ]);

        Escola::create([
            'serie' => $this->serie,
            'bimestre' => $this->bimestre,
            'linguagem' => $this->linguagem,
            'codigo' => $this->codigo,
            'descricao' => $this->descricao,
            'objeto_conhecimento' => $this->objeto_conhecimento,
            'discplina_id' => $this->discplina_id,
            'nivel_ensino' => $this->nivel_ensino,
            'origem' => $this->origem,
        ]);

        $this->closeModalCreate();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $escola = Escola::findOrFail($id);
        $this->escola_id = $id;
        $this->serie = $escola->serie;
        $this->bimestre = $escola->bimestre;
        $this->linguagem = $escola->linguagem;
        $this->codigo = $escola->codigo;
        $this->descricao = $escola->descricao;
        $this->objeto_conhecimento = $escola->objeto_conhecimento;
        $this->discplina_id = $escola->discplina_id;
        $this->nivel_ensino = $escola->nivel_ensino;
        $this->origem = $escola->origem;


        $this->openModalEdit();


    }

    public function update()
    {



        $this->validate([
            'serie' => 'required',
            'bimestre' => 'required',
            'linguagem' => 'required',
            'codigo' => 'required',
            'descricao' => 'required',
            'objeto_conhecimento' => 'required',
            'discplina_id' => 'required',
            'nivel_ensino' => 'required',
            'origem' => 'required',

        ]);

        $escolas = Escola::findOrFail($this->escola_id);


        $escolas->update([
            'serie' => $this->serie,
            'bimestre' => $this->bimestre,
            'linguagem' => $this->linguagem,
            'codigo' => $this->codigo,
            'descricao' => $this->descricao,
            'objeto_conhecimento' => $this->objeto_conhecimento,
            'discplina_id' => $this->discplina_id,
            'nivel_ensino' => $this->nivel_ensino,
            'origem' => $this->origem,
        ]);




        $this->closeModalEdit();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Escola::find($id)->delete();
    }
}
