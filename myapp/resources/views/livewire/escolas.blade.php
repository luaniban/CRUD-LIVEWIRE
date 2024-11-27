<div>

    @if($modalEdit)
    @include('livewire.edit')
    @endif


    @if($modalCreate)
        @include('livewire.create')
    @endif
    <button wire:click="create()" style="background-color: rgb(104, 162, 238); border-radius: 10px; padding: 4px 6px ; margin: 10px; ">Criar Disciplina</button>
    <table class="table" style="margin-left: 12px; margin-bottom: 30px">


        <div>
        <thead>


            <tr style="display: flex; justify-content: center">
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px; ">ID</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;" >Serie</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Bimestre</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Linguagem</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Codigo</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Descricao</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 170px; ">Objeto_conhecimento</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Disciplina_id</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Nivel_ensino</th>
                <th style="border-left: solid 1px black; border-top: solid 1px black; border-bottom: solid 1px black; width: 100px;">Origem</th>
                <th style="border: solid 1px black; width: 100px;">Ações</th>
            </tr>
        </thead>
        <tbody >



            @foreach($escolas as $escola)
                <tr style="display: flex; justify-content: center; ">
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->id }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->serie }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->bimestre }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->linguagem }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->codigo }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->descricao }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 170px; text-align: center">{{ $escola->objeto_conhecimento }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->discplina_id }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; width: 100px; text-align: center">{{ $escola->nivel_ensino }}</td>
                    <td style="border-left: solid 1px; border-bottom: solid 1px black; border-right: solid 1px black; width: 100px; text-align: center">{{ $escola->origem }}</td>
                    <td style="display: flex; align-items: center; ">

                        <button wire:click="edit({{ $escola->id }})" style="margin-right: 2px;  border: solid 1px black; width: 46px; background-color: rgb(113, 162, 219); height: 30px; border-radius: 10px;" >Edit</button>
                        <button wire:click="delete({{ $escola->id }})"  style="border: solid 1px black; width: 50px; background-color: rgb(219, 113, 113); height: 30px; border-radius: 10px;">Delete</button>
                        @endforeach

                    </td>
                </tr>
            </div>



        </tbody>
    </table>

</div>
