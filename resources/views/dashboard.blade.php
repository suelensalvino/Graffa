<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto grid-cols-2 sm:px-6 lg:px-8">
            <div>
                <h1 class="bock text-center text-xl pb-3">Time do coração</h1>
                @include('perfis')
                
            </div>
            <br>
            <div>
                <h1 class="bock text-center text-xl pb-3">Estádios visitados</h1>
                @include('estadios')

            </div>
            </div>
        </div>
    </div>
</x-app-layout>
