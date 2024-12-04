<div class="p-4 mt-4 bg-white" style="border-radius: 10px;>





    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    @if($modalEdit)
    @include('livewire.Disciplina.edit')
    @endif


    @if($modalCreate)
        @include('livewire.Disciplina.create')
    @endif


    <div style="width: 99%; display: flex; justify-content: space-between; align-items: center">


        <form role="search" style="margin-left: 25px">

            <div class="flex-search">
                <x-tsicon name="magnifying-glass" outline class="w-5 h-5 mt-3 mr-2"/>

                <input type="search" placeholder="Search and edit..." aria-label="Search" wire:model.live="search" class="border-gray-300 rounded shadow-md">
            </div>

        <div class="father-search-result">
        @if(sizeof($disciplinasSearch) > 0)
            @foreach($disciplinasSearch as $disciplinaSearch)

               <a  wire:click="edit({{ $disciplinaSearch->id }})" class="searchResult">{{ $disciplinaSearch->code }}</a>

            @endforeach
        @endif
        </div>
    </form>
    <x-tsbutton id="createBottom" class="h-12 bg-white border-blue-700 shadow-md hover:bg-blue-300" wire:click="create()">
        <x-tsicon name="user-plus" outiline class="w-5 h-5 text-blue-700"/><span class="text-blue-700">Criar Curriculo</span>
    </x-tsbutton>

    <table class="table">

        <thead>


            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Codigo</th>
                <th>Integrado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>



            @foreach($pdisciplina as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->name }}</td>
                    <td>{{ $disciplina->shortname }}</td>
                    <td>{{ $disciplina->code }}</td>
                    <td>{{ $disciplina->is_integral }}</td>


                    <td class="acoes">

                        <x-tsbutton.circle icon="pencil"  wire:click="edit({{ $disciplina->id }})"  >Edit</x-tsbutton.circle>
                        <x-tsbutton.circle icon="trash" wire:click="delete({{ $disciplina->id }})" class="ml-2 bg-red-500 hover:bg-red-600">Delete</x-tsbutton.circle>

                        @endforeach
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="">
        {{ $pdisciplina->links() }}
    </div>


        <form action="" class=""></form>

</div>
