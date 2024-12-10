
<div style=" display: flex;  justify-content: center">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('User') }}
        </h2>
    </x-slot>

    @if ($modalCreate == false)

        <div style="display: block; background-color: rgb(196, 196, 196); margin-top: 30px; margin-bottom: 30px; border-radius: 10px;">
            <div style="width: 100%; display: flex; justify-content: flex-end; ">

            <x-tsbutton  id="createBottom" class="h-12 bg-white border-blue-700 shadow-md hover:bg-blue-300" @click="$dispatch('post-create')">
                <x-tsicon name="user-plus" outiline class="w-5 h-5 text-blue-700"/><span class="text-blue-700">Criar Usuário</span>
            </x-tsbutton>

            </div>

            <livewire:users.table/>

            <div style="position: absolute; margin-top: 30px;">
            <livewire:users.edit/>
            </div>
            <livewire:users.delete/>
            <livewire:users.reset/>
            <div style="position: absolute; margin-top: 30px;">
            <livewire:users.create/>
            </div>



        </div>
    @endif








</div>
