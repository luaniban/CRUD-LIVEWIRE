
<div style=" display: flex;  justify-content: center">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    @if ($modalCreate == false)

        <div style="display: block; background-color: rgb(196, 196, 196); margin-top: 30px;">
            <div style="width: 100%; display: flex; justify-content: flex-end">
            <x-tsbutton wire:click="openModalCreate()">Criar</x-tsbutton>

            </div>

            <livewire:users.table/>

            <div style="position: absolute; margin-top: 30px;">
            <livewire:users.edit/>
            </div>
            <livewire:users.delete/>



        </div>
    @endif
    @if($modalCreate == true)
        <livewire:users.create>
    @endif








</div>
