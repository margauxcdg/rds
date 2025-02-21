<x-app-layout>
    <div class="header-container flex items-center gap-5 text-white font-medium p-2 mt-8 mb-3">
        <div class="header">
            <h1 class="flex items-center gap-2 text-3xl">
                <span class="material-symbols-outlined text-2xl">
                    description
                </span> 
                Pending Requests
            </h1>
        </div>
    </div>
    <div class="filter-container flex items-center space-x-4">
        <!-- Filter Tabs -->
        <div class="filter-tab">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white px-1 py-1 rounded-md ">
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 text-white bg-blue-600 rounded-lg active" aria-current="page">All time</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">30 days</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">7 days</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block px-3 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">24 hours</a>
                </li>
            </ul>
        </div>

        <!-- Calendar Filter -->
        <div class="calendar-tab bg-white px-3 py-2 flex items-center space-x-3">
            <span class="material-symbols-outlined text-gray-500 dark:text-gray-400">
                calendar_today
            </span>
            <span class="text-gray-600 dark:text-gray-300 text-sm font-medium">
                Select Date
            </span>
        </div>
    </div>

    <div class="request-history-list p-3 rounded-tr-lg rounded-tl-lg ">
        <div class="head bg-blue-100 p-3 rounded-tr-lg rounded-tl-lg">
            <div class="text">
                <div class="row flex justify-between items-center space-x-4">
                    <div class="col w-1/6">
                        <p class="pt-2 font-semibold text-center ">Request No.</p>
                    </div>
                    <div class="col w-2/6">
                        <p class="pt-2 font-semibold text-center">Requester</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-2 font-semibold text-center">Date</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-2 font-semibold text-center">Request</p>
                    </div>
                    <div class="col w-1/6">
                        <p class="pt-2 font-semibold text-center">Status</p>
                    </div>
                </div>
            </div>      
        </div>
        <div class="request-row  bg-white hover:bg-blue-60 rounded-br-lg rounded-bl-lg border  border-gray-200 transition duration-200">
            <div class="row flex justify-between items-center space-x-4 p-2">
                <div class="col w-1/6">
                    <p class="text-gray-600 text-center">#001</p>
                </div>
                <div class="col w-2/6 justify-center flex">
                    <a href="{{ route('request-details') }}" class="text-gray-600 text-center">
                        Intramurals 2025
                    </a>
                </div>

                <div class="col w-1/6">
                    <p class="text-gray-600 text-center">Jan 20, 2025</p>
                </div>
                <div class="col w-1/6">
                    <p class="text-gray-600 text-center">Video Con</p>
                </div>
                <div class="col w-1/6">
                    <p class="text-green-600 font-semibold text-center">Approved</p>
                </div>
            </div>

      

   
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

    .header-container{
        margin-left: 5rem;
        margin-right: 5rem;
    }

    .filter-container{
        margin-left: 5rem;
        margin-right: 5rem;
        margin-bottom: 0.5rem;
    }

</style>
