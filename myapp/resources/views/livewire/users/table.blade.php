<div>
    <form role="search" style="margin-left: 25px">

        <div class="flex-search">
            <x-tsicon name="magnifying-glass" outline class="w-5 h-5 mt-3 mr-2"/>

            <input type="search" placeholder="Search and edit..." aria-label="Search" wire:model.live="search" class="border-gray-300 rounded shadow-md">
        </div>

    <div class="father-search-result">
    @if(sizeof($usersSearch) > 0)
        @foreach($usersSearch as $userSearch)

           <a  class="searchResult" @click="$dispatch('post-edit', { id: '{{ $userSearch->id }}' })">{{ $userSearch->name }}</a>

        @endforeach
    @endif
    </div>
    </form>


    <table class="table" style="margin: 0px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td class="acoes">

                        <x-tsbutton.circle
                            icon="pencil"
                            @click="$dispatch('post-edit', { id: '{{ $user->id }}' })">
                            Edit
                        </x-tsbutton.circle>





                        <x-tsbutton.circle
                            icon="trash"
                            class="ml-2 bg-red-500 hover:bg-red-600 focus:bg-red-600 focus:border-red-600"
                            @click="$dispatch('post-delete', { id: '{{ $user->id }}' })">
                        </x-tsbutton.circle>

                        <x-tsbutton.circle
                        icon="key"
                        class="ml-2 bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-600 focus:border-yellow-600" style="background-color: black;"
                        @click="$dispatch('post-reset', { id: '{{ $user->id}}' })">
                        </x-tsbutton.circle>






                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="">
        {{ $users->links() }}
    </div>

</div>


</div>
