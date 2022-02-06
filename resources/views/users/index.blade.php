<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1000 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-black">
                    <table class="table-auto">
                        <thead> 
                            <tr>
                                <th>N°</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Verified at</th>
                                <th>Updated at</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-500">
                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email_verified_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->updated_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->phone_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->address }}</td>
                                <td>
                                    <a href="{{ url('/users/' . $user->id . '/edit') }}">
                                    <x-button class="block mt-1 ml-3 justify-center">Edit</x-button>    
                                    </a>
                                    <form action="{{ url('/users/' . $user->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <x-button class="block mt-1 ml-3 justify-center" onclick="return confirm('Do you want to delete this user?')">
                                            Delete
                                        </x-button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
