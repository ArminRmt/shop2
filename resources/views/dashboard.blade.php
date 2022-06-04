
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in! 

                        <div class="dashboard">
                            <ul>
                                <li><a href="{{route('create')}}">Create Post</a></li>
                                {{-- {{route('categories.create')}} --}}
                                <li><a href="">Create Category</a></li>
                                {{-- {{route('categories.index')}} --}}
                                <li><a href="">Categories List</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

