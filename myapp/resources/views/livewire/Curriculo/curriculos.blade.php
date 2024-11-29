
<div>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">




    @if($modalEdit)
    @include('livewire.Curriculo.edit')
    @endif


    @if($modalCreate)
        @include('livewire.Curriculo.create')
    @endif




    <x-tsbutton class="ml-5" wire:click="create()">Criar Curriculo</x-tsbutton>


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
                                <x-tsbutton.circle icon="trash" wire:click="delete({{ $curriculo->id }})" class="ml-2 bg-red-500 hover:bg-red-600">Delete</x-tsbutton.circle>
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

