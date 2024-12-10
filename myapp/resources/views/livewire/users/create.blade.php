<div>
    @if($modalCreate == true)
        <div style="width: 1000px; height: 500px; background-color: rgb(247, 237, 237); margin-top: 10px; padding: 10px; border-radius: 10px;">



            <div style="display: flex; ">
                <h1 style="font-size: 25px;  padding: 4px 10px ;">Criar Curriculo</h1>
                <x-tsbutton.circle class="mt-1 ml-4 " icon="x-mark" wire:click.prevent="closeModalCreate()" type="button" style="font-size: 30px; " >

                </x-tsbutton.circle>
            </div>
            <div style="display: flex; flex-wrap: wrap; width: 1000px">

                <div class="mx-4 my-4 ">
                    <x-tsinput label="Name *" wire:model="name" hint="Insira o nome" ></x-tsinput>
                </div>
                <div ></div>

                    <div class="mx-4 my-4">
                        <x-tsinput suffix="@gmail.com" label="E-mail *" wire:model="email" hint="Insira o email" ></x-tsinput>
                    </div>

                <div class="mx-4 my-4">
                    <x-tspassword label="Password *" hint="Insert your password" value="password" wire:model="password" />
                </div>



            </div>
                        <div style="margin: 10px; width: 250px; display: flex; ">

                            <x-tsbutton wire:click.prevent="store()" type="button">Criar</x-tsbutton>
                        </div>


        </div>


    @endif
</div>
