<x-app-layout>
    <x-slot name="header">
        {{--
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']); --}}


        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> --}}
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100"> --}}
                    {{-- {{ __("You're logged in!") }} --}}
                    {{-- @foreach ($notes as $note)
                    <div
                        class="my-6 p-6 bg-white border-b border-gray-200 dark:border-gray-800 shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl">{{ $note->title }}</h2>
                        <p class="mt-2">
                            {{ $note->text }}
                        </p>
                    </div>
                    @endforeach --}}
                    @foreach ($notes as $note)
                    <div
                        class="my-6 p-6 bg-white border-b border-gray-200 dark:border-gray-800 shadow-sm sm:rounded-lg mt-6">
                        <h2 class="font-bold text-2xl">{{ $note->title }}</h2>
                        <p class="mt-2">
                            {{ $note->text }}
                        </p>
                    </div>
                    @endforeach
                </div>
                {{-- </div> --}}
        </div>
    </div>
</x-app-layout>