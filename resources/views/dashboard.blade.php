<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6" x-data="{ open: false }">
        <button @click="open = true" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Add Request
        </button>

        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
            <div class="form-container bg-white rounded-lg" @click.away="open = false">
                <button @click="open = false" class="flex justify-end" >
                    <span class="material-symbols-outlined justify-end">
                        close
                    </span>
                </button>
            
                
                <h1 class="form-header mb-5 text-center">Request Form</h1>
                
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name of Representative')" />
                        <x-text-input id="text" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="event" :value="__('Name of Event')" />
                        <x-text-input id="text" class="block mt-1 w-full" type="text" name="event" :value="old('event')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="purpose" :value="__('Purpose of the Event')" />
                        <select class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'" name="purpose" id="eventPurpose">
                            <option value=""></option>
                            <option value="conference">Conference</option>
                            <option value="videoCon">Video Con</option>
                            <option value="training">Training</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <div class="row">
                            <div class="column w-full mr-2">
                                <x-input-label for="startDate" :value="__('Start Date')" />
                                <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'" type="date" id="startDate" name="startDate">
                            </div>
                            <div class="column w-full">
                            <x-input-label for="endDate" :value="__('End Date')" />
                            <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'" type="date" id="startDate" name="startDate">
                               
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="row">
                            <div class="column w-full mr-2">
                                <x-input-label for="setUpDate" :value="__('Set up Date')" />
                                <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'" type="time" id="setUpDate" name="setUpDate">
                            </div>
                            <div class="column w-full">
                            <x-input-label for="setUpTime" :value="__('Set up Time')" />
                            <input class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'" type="time" id="setUpTime" name="setUpTime">
                               
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="text" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus autocomplete="username" />
                    </div>
                    

                    <div class ="mt-4 mx-4">
                        <x-primary-button style="background-color: #0575E6; color: white; width: 100%;">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .form-container{
        width: 30rem;
        padding: 2.5rem;
    }

    .form-header{
        font-size: 1.5rem;
    }
</style>
