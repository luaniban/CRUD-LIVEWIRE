
<div class="p-4 bg-white " style="border-radius: 10px;">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">




    @if($modalEdit)
    @include('livewire.Curriculo.edit')
    @endif


    @if($modalCreate)
        @include('livewire.Curriculo.create')
    @endif




    <div style="width: 99%; display: flex; justify-content: space-between; align-items: center">


        <form role="search" style="margin-left: 25px;" >

            <div class="flex-search">
                <x-tsicon name="magnifying-glass" outline class="w-5 h-5 mt-3 mr-2"/>

                <input type="search" placeholder="Search and edit..." aria-label="Search" wire:model.live="search" class="border-gray-300 rounded shadow-md">
            </div>

            <div class="father-search-result">

            @if(sizeof($curriculosSearch) > 0)
                @foreach($curriculosSearch as $curriculoSearch)

                <a  wire:click="edit({{ $curriculoSearch->id }})" class="searchResult">{{ $curriculoSearch->codigo }}</a>

                @endforeach
            @endif
            </div>
        </form>



        <x-tsbutton id="createBottom" class="mr-4 bg-white" wire:click="create()">
            <x-tsicon name="user-plus" outiline class="w-5 h-5 text-blue-700"/><span class="text-black">Criar Curriculo</span>
        </x-tsbutton>


    </div>
    <table class="table">


    <div>
            <thead>


                <tr>
                    <th>ID</th>
                    <th >Serie</th>
                    <th >Bimestre</th>
                    <th>Linguagem</th>
                    <th>Codigo</th>
                    <th>Descricao</th>
                    <th>Objeto_conhecimento</th>
                    <th>Disciplina_id</th>
                    <th>Nivel_ensino</th>
                    <th>Origem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody >



                @foreach($pcurriculos as $curriculo)
                    <tr>
                        <td >{{ $curriculo->id }}</td>
                        <td >{{ $curriculo->serie }}</td>
                        <td >{{ $curriculo->bimestre }}</td>
                        <td>{{ $curriculo->linguagem }}</td>
                        <td>{{ $curriculo->codigo }}</td>
                        <td>{{ $curriculo->descricao }}</td>
                        <td>{{ $curriculo->objeto_conhecimento }}</td>
                        <td>{{ $curriculo->discplina_id }}</td>
                        <td>{{ $curriculo->nivel_ensino }}</td>
                        <td >{{ $curriculo->origem }}</td>

                            <td class="acoes">

                                <x-tsbutton.circle icon="pencil"  wire:click="edit({{ $curriculo->id }})"  >Edit</x-tsbutton.circle>
                                <x-tsbutton.circle wire:confirm="Você tem certeza que deseja deletar o {{ $curriculo->codigo }}?" icon="trash" wire:click="delete({{ $curriculo->id }})" class="ml-2 bg-red-500 hover:bg-red-600">Delete</x-tsbutton.circle>


                                @endforeach




                            </td>
                    </tr>
                </div>



            </tbody>

        </table>
        <div class="pagination">
            {{ $pcurriculos->links() }}
        </div>






    </div>

