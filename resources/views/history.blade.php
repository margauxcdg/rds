<x-app-layout>
    <div class="header-container flex items-center gap-5 text-white font-medium p-2 mt-8 mb-3">
        <div class="header">
            <h1 class="flex items-center gap-2 text-3xl">
                <span class="material-symbols-outlined text-2xl">
                    history
                </span> 
                Booking History
            </h1>
        </div>
    </div>

    <div class="filter-container">
     
    </div>

    <div class="request-history-list">
        <div class="head bg-gray-100 p-4 rounded-md">
            <div class="text">
                <div class="row flex justify-between items-center space-x-4">
                    <div class="col w-1/6">
                        <p class="pt-3 font-semibold text-gray-700">Request No.</p>
                    </div>
                    <div class="col w-2/6">
                        <p class="pt-3 font-semibold text-gray-700">Name of Event</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-3 font-semibold text-gray-700">Date</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-3 font-semibold text-gray-700">Request</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-3 font-semibold text-gray-700">Status</p>
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

    .request-history-list{
        margin-left: 5rem;
        background: #B9D8F9;
    }
</style>
