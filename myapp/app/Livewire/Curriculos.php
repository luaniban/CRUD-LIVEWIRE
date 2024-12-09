<?php

namespace App\Livewire;

use illuminate\http\Request;
use Livewire\Component;
use App\Models\Curriculo;
use App\Models\Disciplina;
use Livewire\WithPagination;
use TallStackUi\Traits\Interactions;
use TallStackUi\View\Components\Modal;
use Illuminate\Database\Eloquent\Builder;


class Curriculos extends Component
{

    use Interactions;

    use WithPagination;


    public $curriculo,$curriculos, $serie, $bimestre, $linguagem, $codigo, $descricao, $objeto_conhecimento, $discplina_id, $nivel_ensino, $origem, $curriculo_id, $id;
    public $modalCreate = 0;
    public $modalEdit = 0;


    public ?int $quantity = 10;
    public $search = "";


    public $pcurriculosPerPage = 5;

    public function render()

    {
        //$this->curriculos = Curriculo::all();


        $results = [];

        if(strlen($this->search) >= 1) {
            $results = Curriculo::where('codigo', 'like', '%' . $this->search . '%')->limit(5)->get();
        }
        return view('livewire.Curriculo.curriculos', ['pcurriculos' => Curriculo::orderBy('id', 'desc')->paginate($this->pcurriculosPerPage), 'curriculosSearch' => $results]);
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

        Curriculo::create([
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

        $this->banner()
        ->success('Curriculo criado com sucesso', 'Atualização do curriculo')
        ->flash()
        ->leave(3)
        ->send();
    }

    public function edit($id)
    {
        $curriculo = Curriculo::findOrFail($id);
        $this->curriculo_id = $id;
        $this->serie = $curriculo->serie;
        $this->bimestre = $curriculo->bimestre;
        $this->linguagem = $curriculo->linguagem;
        $this->codigo = $curriculo->codigo;
        $this->descricao = $curriculo->descricao;
        $this->objeto_conhecimento = $curriculo->objeto_conhecimento;
        $this->discplina_id = $curriculo->discplina_id;
        $this->nivel_ensino = $curriculo->nivel_ensino;
        $this->origem = $curriculo->origem;


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

        $curriculos = Curriculo::findOrFail($this->curriculo_id);


        $curriculos->update([
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

        $this->banner()
        ->success('Curriculo atualizado com sucesso', 'Atualização do curriculo')
        ->flash()
        ->leave(3)
        ->send();

        return $this->redirect(route('dashboard'));
    }



    public function delete($id)
    {

        Curriculo::find($id)->delete();

    }



}





