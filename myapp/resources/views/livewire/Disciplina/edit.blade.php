<div style="width: 300px; display: flex; justify-content: space-between; margin: 10px">
    <h1 style="font-size: 25px; background-color: rgb(211, 211, 211); border-radius: 10px; padding: 4px 10px ;">Editar Disciplina</h1>
    <button wire:click.prevent="closeModalEdit()" type="button" style="font-size: 30px;">
        &times;
    </button>
</div>
            <div style="display: flex; flex-wrap: wrap;">



                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <label for="name">Nome</label>
                    <input type="text"  wire:model="name">
                    @error('name') <span>{{ $message }}</span>@enderror
                </div>
                <div ></div>

                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <label for="shortname">Sigla</label>
                    <input type="text"  wire:model="shortname">
                    @error('shortname') <span >{{ $message }}</span>@enderror
                    </div>

                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column; height: 50px">
                    <label for="code">Codigo</label>
                    <input type="text"   wire:model="code">
                    @error('code') <span >{{ $message }}</span>@enderror
                </div>

                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <label for="is_integral">Integrado</label>
                    <input type="text"  wire:model='is_integral'>
                    @error('is_integral') <span >{{ $message }}</span>@enderror
                </div>







            </div>
            <div style="margin: 10px; width: 250px; display: flex; ">

                <button wire:click.prevent="update()" type="button" style="  background-color: rgb(104, 162, 238); border-radius: 10px; padding: 4px 6px ;">Save</button>
            </div>
        </div>


