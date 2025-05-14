<div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
    <div class="form-container bg-white rounded-lg" @click.away="open = false">
        <div class="flex justify-end">
            <button @click="open = false" class="text-gray-500 hover:text-gray-700">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <h1 class="form-header mb-5 text-center">Reason for Declined</h1>

        <form action="{{ route('requests.decline', $request->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <textarea id="decline_reason" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="decline_reason" required></textarea>
            </div>
           
            <div class="mt-4">
                <x-primary-button style="background-color: #0575E6; color: white; width: 100%;">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

