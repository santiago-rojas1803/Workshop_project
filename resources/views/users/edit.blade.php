<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-1000 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                    <!-- Succes Message -->
                    <x-succes-message></x-succes-message>
                    <form action="{{ url('/users/' . $user->id) }}" method="post">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-row-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')"></x-label>
                                    <x-input class="block mt-1 w-full" type="text" name="name"
                                        value="{{ $user->name }}" autofocus></x-input>
                                </div>   
                            </div>
                            <div class="grid grid-row-2 gap-6">
                                <div>
                                    <x-label for="email" :value="__('Email')"></x-label>
                                    <x-input class="block mt-1 w-full" type="email" name="email"
                                        value="{{ $user->email }}" autofocus></x-input>
                                </div>   
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Update
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
