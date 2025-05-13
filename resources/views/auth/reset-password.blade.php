<x-guest-layout>
    @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
   <div class = "min-h-screen">
   <div class="flex w-full h-full">
       <div class="left-column-pass relative">
            <img src="" alt="Background Image" class="image">
            <img src="{{ asset('assets/images/forgot-pass.jpg') }}" alt="System Login" class="forgot-pass-img">
        </div>

        <!-- Right Column -->
        <div class="right-column-pass">
    
        <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <h1>Reset Password</h1>
        <p class="text-gray-600 mb-4">For your security, please enter a new password below. Make sure it’s strong and something only you would know. </p>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="mt-4 w-full">
            <x-primary-button style="background-color: #0575E6; color: white; width: 100%;">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>

        </div>
    </div>
   </div>

 
</x-guest-layout>

<style>
    .left-column-pass {
        position: relative; 
        width: 65%;
    }

    .forgot-pass-img{
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); 
    max-width: 70%; 
    height: auto;
    opacity: 0.9; 
    }

    .right-column-pass {
    width: 35%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
    padding: 2rem;
}


</style>
