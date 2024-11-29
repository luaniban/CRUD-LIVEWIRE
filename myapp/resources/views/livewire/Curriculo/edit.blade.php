<div class="body">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="ml-1" style="width: 300px; display: flex;  margin: 10px align-items: center" >
    <h1 style="font-size: 25px;  padding: 4px 10px ;">Editar Curriculo</h1>
    <x-tsbutton.circle class="mt-1 ml-4 " icon="x-mark" wire:click.prevent="closeModalEdit()" type="button" style="font-size: 30px; " >

    </x-tsbutton.circle>
</div>
            <div style="display: flex; flex-wrap: wrap; width: 1000px">

                <div class="mx-4 my-4 ">
                    <x-tsinput label="Série *" hint="Insira a série" wire:model="serie" style="width: 270px" />

                </div>
                <div ></div>

                    <div class="mx-4 my-4">
                    <x-tsselect.native :options="[1,2,3]" wire:model="bimestre" label="Bimestre *" style="width: 270px" />



                    </div>

                <div class="mx-4 my-4">
                    <x-tsinput label="Linguagem *" hint="Insira a linguagem" wire:model="linguagem" style="width: 270px"/>

                </div>
                <div class="mx-4 my-4">
                    <x-tsinput label="Codigo *" hint="Insira o código" wire:model="codigo" style="width: 270px"/>

                </div>
                <div class="mx-4 my-4">
                    <x-tsinput label="Descrição *" hint="Insira a descrição" wire:model="descricao" style="width: 270px"/>

                </div>
                <div class="mx-4 my-4">
                    <x-tsinput label="Objeto de conhecimento *" hint="Insira o objeto de conhecimento" wire:model="objeto_conhecimento" style="width: 270px"/>

                </div>
                <div class="mx-4 my-4">
                    <x-tsinput label="Id da disciplina *" hint="Insira o id da disciplina" wire:model="discplina_id" style="width: 270px"/>

                </div>
                <div class="mx-4 my-4">
                    <x-tsselect.native  :options="[
                    ['label' => 'Fundamental 1', 'value' => 'fundamental_1'],
                    ['label' => 'Fundamental 2', 'value' => 'fundamental_2'],
                    ['label' => 'Integrado 1', 'value' => 'integrado_1'],
                    ['label' => 'Integrado 2', 'value' => 'Integrado_2'],
                    ]" select="label:label|value:value" wire:model='nivel_ensino' label="Nivel de ensino *" style='width: 270px' hint="Insira o nivel de ensino"/>

                </div>

                <div class="mx-4 my-4">
                    <x-tsinput label="Origem *" hint="Insira a origem" wire:model="origem" style="width: 270px"/>

                </div>








            </div>
            <div style="margin: 10px; width: 250px; display: flex; ">

                <x-tsbutton wire:click.prevent="update()" type="button" style="  background-color: rgb(104, 162, 238); border-radius: 10px; padding: 4px 6px ;">Save</x-tsbutton>
            </div>
        </div>


</div>
