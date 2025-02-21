<div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
    <div class="form-container bg-white rounded-lg" @click.away="open = false">
        <div class="flex justify-end">
            <button @click="open = false" class="text-gray-500 hover:text-gray-700">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <h1 class="form-header mb-5 text-center">Request Form</h1>

        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name of Representative')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
            </div>

            <div class="mb-4">
                <x-input-label for="event" :value="__('Name of Event')" />
                <x-text-input id="event" class="block mt-1 w-full" type="text" name="event" required />
            </div>

            <div class="mb-4">
                <x-input-label for="purpose" :value="__('Purpose of the Event')" />
                    <select id="purpose" name="purpose" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" onchange="toggleOtherInput()">
                        <option value=""></option>
                        <option value="conference">Conference</option>
                        <option value="videoCon">Video Con</option>
                        <option value="training">Training</option>
                        <option value="others">Others</option>
                    </select>
            </div>
            <div id="otherPurposeInput" class="mb-4 hidden">
                <x-input-label for="other_purpose" :value="__('Specify Purpose')" />
                <input type="text" id="other_purpose" name="other_purpose" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
            </div>


            <div class="mb-4 flex gap-4">
                <div class="w-full">
                    <x-input-label for="startDate" :value="__('Start Date')" />
                    <input id="startDate" type="date" name="startDate" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="w-full">
                    <x-input-label for="endDate" :value="__('End Date')" />
                    <input id="endDate" type="date" name="endDate" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                </div>
            </div>

            <div class="mb-4 flex gap-4">
                <div class="w-full">
                    <x-input-label for="setUpDate" :value="__('Set up Date')" />
                    <input id="setUpDate" type="date" name="setUpDate" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="w-full">
                    <x-input-label for="setUpTime" :value="__('Set up Time')" />
                    <input id="setUpTime" type="time" name="setUpTime" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
                </div>
            </div>

            <div class="mb-4">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" required />
            </div>

            <div class="mt-4">
                <x-primary-button style="background-color: #0575E6; color: white; width: 100%;">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

<style>
    .form-container {
        width: 30rem;
        z-index: 50;
        padding: 3rem;
    }

    .form-header {
        font-size: 1.5rem;
    }
</style>

<script>
    function toggleOtherInput() {
        const purposeSelect = document.getElementById('purpose');
        const otherInputDiv = document.getElementById('otherPurposeInput');

        if (purposeSelect.value === 'others') {
            otherInputDiv.classList.remove('hidden');
        } else {
            otherInputDiv.classList.add('hidden');
        }
    }
</script>
