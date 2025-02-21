<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 flex gap-6" x-data="{ open: false }">
    <!-- Card Schedule -->
    <div class="card-sched mt-5">
        <h2 class="font-manrope text-3xl leading-tight text-gray-900 mb-1.5 mt-5">Scheduled Requests</h2>
        <p class="text-lg font-normal text-gray-600 mb-8">Don’t miss schedule</p>
        <div class="flex gap-5 flex-col">
            <!-- Cards -->
            <div class="p-6 rounded-xl bg-white">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                        <p class="text-base font-medium text-gray-900">Jan 10, 2020 - 10:00 - 11:00</p>
                    </div>
                </div>
                <h6 class="text-xl leading-8 font-semibold text-black mb-1">President's Office - Board Meeting</h6>
                <p class="text-base font-normal text-gray-600">Conference</p>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div class="cal-col">
        <div class="calendar">
            @include('layouts.calendar')
        </div>
    </div>

    @include('form.request-form')
</div>

</x-app-layout>

<style>
    .card-sched{
        width: 30%;
        margin-top: 1.5rem;
    }
    .cal-col{
        width: 70%;
    }
</style>
