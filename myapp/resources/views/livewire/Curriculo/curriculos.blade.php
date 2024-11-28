<div class="body">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @if($modalEdit)
    @include('livewire.Curriculo.edit')
    @endif


    @if($modalCreate)
        @include('livewire.Curriculo.create')
    @endif



    <button class="botaoCreate" wire:click="create()">Criar Curriculo</button>
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

                            <button class="botaoEdit" wire:click="edit({{ $curriculo->id }})"  >Edit</button>
                            <button class="botaoDelete" swire:click="delete({{ $curriculo->id }})" >Delete</button>
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

