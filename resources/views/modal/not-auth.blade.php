<div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
  <div class="bg-white rounded-lg shadow-lg w-[650px] h-[350px] flex overflow-hidden">
    
  
    <div class="bg-blue-600 flex items-center justify-center w-[55%]">
      <img src="{{ asset('assets/images/stop.png') }}" alt="Not Logged In" class="w-50 object-cover">
    </div>

 
    <div class="p-6 w-[45%] flex flex-col justify-center text-center">
      <div>
        <h1 class="form-header mb-3">Oops! Who are you?</h1>
        <p class="text-gray-600">Please log in to add a request.</p>
      </div>


      <div class="flex flex-col gap-2 mt-6">
        <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
          {{ __('Log in') }}
        </a>
        <button @click="open = false" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-100">
          Close
        </button>
      </div>
    </div>

  </div>
</div>
