<x-app-layout>
    <div class="header-container flex items-center gap-5 text-white font-medium p-2 mt-8 mb-3">
        <div class="header">
            <h1 class="flex items-center gap-2 text-3xl">
                <span class="material-symbols-outlined text-2xl">
                    description
                </span> 
                Request Application
            </h1>
        </div>
    </div>

    <div class="request-details p-5 rounded-lg bg-white">
        <div class="request-header flex items-center justify-between w-full mb-3">
            <div class="mt-4">
                <h2 class="text-2xl font-semibold">Name of the Requester</h2> 
                <p class="text-gray-600">Name of Office</p>
            </div>
            <div class="flex gap-4 items-center">
                <x-primary-button style="background-color: #12D707; color: white; width: 100px; height: 40px;">
                    {{ __('Accept') }}
                </x-primary-button>
                <div x-data="{ open: false}">
                @include('form.decline-form')
                    <x-primary-button @click="open = true" style="background-color: #D7070B; color: white; width: 100px; height: 40px;">
                        {{ __('Decline') }}
                    </x-primary-button>
                </div>
                
            </div>
        </div>
       
        <hr class="mb-4">

        <div class="request-information flex justify-between pt-3">
            <div class="left-col-info">
                <p class="header-text font-semibold mb-3">Name of Event:</p>
                <p class ="detail-text mb-5">Name of Event</p>
                <p class="header-text font-semibold mb-3">Purpose of the Event:</p>
                <p class ="detail-text mb-5">Purpose of the Event</p>
                <p class="header-text font-semibold mb-3">Location:</p>
                <p class ="detail-text">Location</p>
            </div>
            <div class="right-col-info">
                <p class="header-text font-semibold mb-3">Date of Event:</p>
                <p class ="detail-text mb-5">March 1-5, 2025</p>
                <p class="header-text font-semibold mb-3">Request Set up Date:</p>
                <p class ="detail-text mb-5">March 1, 2025 | 8:00 A.M.</p>
                <p class="header-text font-semibold mb-3">Remarks:</p>
                <p class ="detail-text">Remarks</p>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .material-symbols-outlined {
        font-size: 28px;
        vertical-align: middle;
    }

    .request-details {
        margin-left: 4.5rem;
        margin-right: 5rem;
        padding: 2rem;
    }

    h1 {
        font-size: 1.7rem;
    }

    .header-container {
        margin-left: 5rem;
        margin-right: 5rem;
    }

    .request-information {
        margin-top: 10px;
    }

    .left-col-info {
        text-align: left;
        width: 50%; 
    }

    .right-col-info {
        text-align: left;
        width: 50%;
    }

    .header-text{
        font-size: 1.25rem;
    }

    .detail-text{
        font-size: 1.10rem;
        color:#404040;
    }
</style>