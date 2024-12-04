<div class="mt-4 ml-1" style="width: 300px; display: flex;  margin: 10px align-items: center" >
    <h1 style="font-size: 25px;  padding: 4px 10px ;">Editar Disciplina</h1>
    <x-tsbutton.circle class="mt-1 ml-4 " icon="x-mark" wire:click.prevent="closeModalEdit()" type="button" style="font-size: 30px; " >

    </x-tsbutton.circle>
</div>
            <div style="display: flex; flex-wrap: wrap;">



                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <x-tsinput label="Nome *" hint="Insira o nome" wire:model="name" style="width: 270px" class=""/>
                    </div>

                    <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <x-tsinput label="Sigla *" hint="Insira a sigla" wire:model="shortname" style="width: 270px" class=""/>
                    </div>


                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <x-tsselect.native  :options="[
                    ['label' => 'Sim', 'value' => '1'],
                    ['label' => 'Não', 'value' => '0'],

                    ]" select="label:label|value:value" wire:model='is_integral' label="Integrado *" style="" hint="Insira se é integrado"/>
                </div>

                <div style="margin: 10px; width: 230px; display: flex; flex-direction: column;">
                    <x-tsinput label="Código *" hint="Insira o código" wire:model="code" style="width: 270px" class=""/>
                </div>

            </div>
            <div style="margin: 10px; width: 250px; display: flex; ">

                <x-tsbutton wire:click.prevent="update()"  type="button" style="  background-color: rgb(104, 162, 238); border-radius: 10px; ;">Save</x-tsbutton>
            </div>

        </div>


