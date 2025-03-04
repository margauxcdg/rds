<x-app-layout>
    <div class="header-container flex items-center gap-5 text-white font-medium p-2 mt-8 mb-3">
        <div class="header">
            <h1 class="flex items-center gap-2 text-3xl">
                <span class="material-symbols-outlined text-2xl">description</span> 
                Pending Requests
            </h1>
        </div>
    </div>

    <div class="filter-container flex items-center space-x-4">
        <div class="filter-tab">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white px-1 py-1 rounded-md">
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 text-white bg-blue-600 rounded-lg active">All time</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">30 days</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">7 days</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">24 hours</a>
                </li>
            </ul>
        </div>

        <div class="calendar-tab bg-white px-3 py-2 flex items-center space-x-3">
            <span class="material-symbols-outlined text-gray-500">calendar_today</span>
            <span class="text-gray-600 text-sm font-medium">Select Date</span>
        </div>
    </div>

    <div class="request-history-list p-3 rounded-tr-lg rounded-tl-lg">
        <div class="head bg-blue-100 p-3 rounded-tr-lg rounded-tl-lg">
            <div class="text">
                <div class="row flex justify-between items-center space-x-4">
                    <div class="col w-1/6"><p class="pt-2 font-semibold text-center">Request No.</p></div>
                    <div class="col w-2/6"><p class="pt-2 font-semibold text-center">Requester</p></div>
                    <div class="col w-1/6"><p class="pt-2 font-semibold text-center">Date</p></div>
                    <div class="col w-1/6"><p class="pt-2 font-semibold text-center">Request</p></div>
                    <div class="col w-1/6"><p class="pt-2 font-semibold text-center">Status</p></div>
                </div>
            </div>      
        </div>

        @php
            $statusColors = [
                'Open' => 'text-green-600 bg-green-100', 
                'In Progress' => 'text-yellow-600 bg-yellow-100', 
                'Closed' => 'text-gray-600 bg-gray-200', 
                'Declined' => 'text-red-600 bg-red-100', 
            ];
        @endphp

    @foreach ($requests as $request)
    <div class="request-row bg-white hover:bg-blue-50 border border-gray-200 transition duration-200">
        <div class="row flex justify-between items-center space-x-4 p-2">
            <div class="col w-1/6"><p class="text-gray-600 text-center">#{{ $request->id }}</p></div>
            <div class="col w-2/6 justify-center flex">
                <a href="{{ route('request-details.show', $request->id) }}" class="text-gray-600 text-center">
                    {{ $request->event_name }}
                </a>
            </div>
            <div class="col w-1/6"><p class="text-gray-600 text-center">{{ \Carbon\Carbon::parse($request->created_at)->format('M d, Y') }}</p></div>
            <div class="col w-1/6"><p class="text-gray-600 text-center">{{ $request->purpose }}</p></div>
            <div class="col w-1/6">
                <span class="px-3 py-1 rounded-full font-semibold flex justify-center items-center {{ $statusColors[$request->status] }}">
                    {{ $request->status }}
                </span>
            </div>

        </div>
    </div>
    @endforeach



    </div>
</x-app-layout>

<style>
    .material-symbols-outlined {
        font-size: 28px;
        vertical-align: middle;
    }

    .request-history-list {
        margin-left: 4.5rem;
        margin-right: 5rem;
    }

    .header-container {
        margin-left: 5rem;
        margin-right: 5rem;
    }

    .filter-container {
        margin-left: 5rem;
        margin-right: 5rem;
        margin-bottom: 0.5rem;
    }
</style>
