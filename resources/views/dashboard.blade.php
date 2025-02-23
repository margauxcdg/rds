<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6" x-data="{ open: false }">
        
       @guest 
            @include('modal.not-auth')
        @endguest
        @auth
            @include('form.request-form')
        @endauth

        <div class="calendar">
            @include('layouts.calendar')
        </div>
    </div>
</x-app-layout>


