<div style="width: 300px; display: flex; justify-content: space-between; margin: 10px">
    <h1 style="font-size: 25px; background-color: rgb(211, 211, 211); border-radius: 10px; padding: 4px 10px ;">Criar Curriculo</h1>
    <button wire:click.prevent="closeModalCreate()" type="button" style="font-size: 30px;">
        &times;
    </button>
</div>

<div style="display: flex; flex-wrap: wrap;">



                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="serie">Serie</label>
                        <input type="text" placeholder="Digite a serie" wire:model="serie">
                        @error('serie') <span>{{ $message }}</span>@enderror
                    </div>
                    <div ></div>

                        <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="bimestre">Bimestre</label>
                        <input type="text" placeholder="Digite o bimestre" wire:model="bimestre">
                        @error('bimestre') <span >{{ $message }}</span>@enderror
                        </div>

                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column; height: 50px">
                        <label for="linguagem">Linguagem</label>
                        <input type="text"  placeholder="Digite a linguagem" wire:model="linguagem">
                        @error('linguagem') <span >{{ $message }}</span>@enderror
                    </div>
                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="codigo">Codigo</label>
                        <input type="text" placeholder="Digite o codigo" wire:model="codigo">
                        @error('codigo') <span >{{ $message }}</span>@enderror
                    </div>
                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="descricao">Descrição</label>
                        <input type="text" placeholder="Digite a descrição" wire:model="descricao">
                        @error('descricao') <span >{{ $message }}</span>@enderror
                    </div>
                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="objeto_conhecimento">Objeto de conhecimento</label>
                        <input type="text" placeholder="Digite o objeto de conhecimento" wire:model="objeto_conhecimento">
                        @error('objeto_conhecimento') <span >{{ $message }}</span>@enderror
                    </div>
                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="discplina_id">Id da disciplina</label>
                        <input type="text" placeholder="Digite o id da disciplina" wire:model="discplina_id">
                        @error('discplina_id') <span >{{ $message }}</span>@enderror
                    </div>
                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="nivel_ensino">Nivel de ensino</label>
                        <input type="text" placeholder="Digite o nivel de ensino" wire:model="nivel_ensino">
                        @error('nivel_ensino') <span >{{ $message }}</span>@enderror
                    </div>

                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                        <label for="origem">Origem</label>
                        <input type="text" placeholder="Digite a origem" wire:model="origem">
                        @error('origem') <span >{{ $message }}</span>@enderror
                    </div>








            </div>
            <div style="margin: 10px; width: 250px; display: flex; ">

                <button wire:click.prevent="store()" type="button" style="  background-color: rgb(104, 162, 238); border-radius: 10px; padding: 4px 6px ;">Criar</button>
            </div>
</div>

