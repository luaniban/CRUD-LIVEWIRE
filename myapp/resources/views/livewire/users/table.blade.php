<div>
   


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
                    <td>

                        <x-tsbutton.circle
                            icon="pencil"
                            @click="$dispatch('post-edit', { id: '{{ $user->id }}' })">
                            Edit
                        </x-tsbutton.circle>





                        <x-tsbutton.circle
                            icon="trash"
                            class="ml-2 bg-red-500 hover:bg-red-600"
                            @click="$dispatch('post-delete', { id: '{{ $user->id }}' })">
                        </x-tsbutton.circle>





                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>


</div>
