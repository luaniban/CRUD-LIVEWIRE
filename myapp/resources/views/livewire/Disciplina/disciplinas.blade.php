<div class="body">



    

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    @if($modalEdit)
    @include('livewire.Disciplina.edit')
    @endif


    @if($modalCreate)
        @include('livewire.Disciplina.create')
    @endif
    <button class="botaoCreate" wire:click="create()">Criar Disciplina</button>
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

                        <button class="botaoEdit" wire:click="edit({{ $disciplina->id }})" >Edit</button>
                        <button class="botaoDelete" wire:click="delete({{ $disciplina->id }})">Delete</button>
                        @endforeach
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="pagination">
        {{ $pdisciplina->links() }}
    </div>


        <form action="" class=""></form>

</div>
