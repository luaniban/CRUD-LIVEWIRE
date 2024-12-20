
<div>
    @if($modalEdit == true)

    <div style="width: 1000px; height: 500px; background-color: rgb(247, 237, 237); margin-top: 10px; padding: 10px; border-radius: 10px;">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <div class="ml-1" style="width: 300px; display: flex;  margin: 10px align-items: center" >
            <h1 style="font-size: 25px;  padding: 4px 10px ;">Editar Usuário</h1>
            <a class="mt-1 ml-4 text-gray-700" wire:click.prevent="closeModalEdit()" style="padding-top: 8px; cursor: pointer;">Cancelar</a>

            </a>
        </div>
                    <div style="display: flex; flex-wrap: wrap; width: 1000px">

                        <div class="mx-4 my-4 ">
                            <x-tsinput label="Nome *" hint="Insira a nome" wire:model="name" style="width: 270px" />

                        </div>
                        <div ></div>


                            <div class="mx-4 my-4">
                                <x-tsinput suffix="@gmail.com" label="E-mail *" hint="Insira a e-mail" wire:model="email" style="width: 270px" />



                            </div>

                        <div class="mx-4 my-4">
                            <x-tsinput label="Senha" hint="Insira a senha" wire:model="password" style="width: 270px"/>

                        </div>

                    <div style="margin: 10px; width: 250px; display: flex; ">

                        <x-tsbutton wire:click.prevent="update()"  type="button" style="  background-color: rgb(104, 162, 238); border-radius: 10px; padding: 4px 6px ;">Save</x-tsbutton>
                    </div>
                </div>


        </div>


        @endif
</div>
