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
                <h2 class="text-3xl font-semibold mb-2">{{ $request->user->name}}</h2> 
                <p class="text-2xl text-gray-600">{{ $request->representative_name }}</p>
            </div>
            
            <div class="flex gap-4 items-center">
                @if(auth()->check() && auth()->user()->email === 'nocs_services@gbox.adnu.edu.ph')
                    <div x-data="{ open: false }">
                        @include('form.deployment-form')
                        <x-primary-button @click="open = true" style="background-color: #12D707; color: white; width: 100px; height: 40px;">
                            {{ __('Accept') }}
                        </x-primary-button>
                    </div>

                    <div x-data="{ open: false }">
                        @include('form.decline-form')
                        <x-primary-button @click="open = true" style="background-color: #D7070B; color: white; width: 100px; height: 40px;">
                            {{ __('Decline') }}
                        </x-primary-button>
                    </div>
                @else
                    <div x-data="{ open: false }">
                        @include('form.cancel-form')
                        <x-primary-button @click="open = true" style="background-color: #D7070B; color: white; width: 100px; height: 40px;">
                            {{ __('Cancel') }}
                        </x-primary-button>

                    
                    </div>        
                @endif
            </div>

        </div>
       
        <hr class="mb-4">

        <div class="request-information flex justify-between pt-3">
            <div class="left-col-info">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">event</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Name of Event:</p>
                        <p class="detail-text">{{ $request->event_name }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">event_available</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Purpose of the Event:</p>
                        <p class="detail-text">{{ $request->purpose }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">calendar_clock</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Date of Event:</p>
                        <p class="detail-text">{{ \Carbon\Carbon::parse($request->start_date)->format('M d') }} - {{ \Carbon\Carbon::parse($request->created_at)->format('d, Y') }}</p>
                    </div>
                </div>

               
            </div>
            <div class="right-col-info">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">location_on</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Location:</p>
                        <p class="detail-text">{{ $request->location }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">group</span>
                    <div>
                        <p class="header-text font-semibold mb-1">No. of Users:</p>
                        <p class="detail-text">{{ $request->users }} users</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">calendar_clock</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Request Set-up Date:</p>
                        <p class="detail-text">{{ $request->setup_date }} | {{ $request->setup_time }}</p>
                    </div>
                </div>
              
            </div>
        </div>

        <hr class="mb-4 mt-4">
        <p class="header-text font-semibold mb-1">Deployment Information</p>
        <div class="request-information flex justify-between pt-3">
            <div class="left-col-info">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">manage_accounts</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Name of Personnel:</p>
                        <p class="detail-text">{{ $request->event_name }}</p>
                    </div>
                </div>

           
               
            </div>
            <div class="right-col-info">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-gray-600">home_repair_service</span>
                    <div>
                        <p class="header-text font-semibold mb-1">Additional Equipments:</p>
                        <p class="detail-text">{{ $request->location }}</p>
                    </div>
                </div>
               
              
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
        font-size: 1.5rem;
    }

    .detail-text{
        font-size: 1.5rem;
        color:#404040;
    }
</style>