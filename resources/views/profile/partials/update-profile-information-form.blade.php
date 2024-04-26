<section>
    <nav class="flex">
        
    </nav>
    <header>
        <h2 class="text-lg font-large" style="color: #4E9F3D;">
            {{ __('Profiel Informatie') }}
        </h2>
        <hr class="mt-2 border-white border-opacity-70">
        
        <p class="mt-1 text-sm text-gray">
            {{ __("Werk de profielinformatie en het e-mailadres van je account bij.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
    
        <div>
            <x-input-label for="name" :value="__('Naam')" style="color: gray" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-gray rounded-md border-1 border-gray-100 focus:border-indigo-500 focus:ring-indigo-500" style="background-color: #ffffff;" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
    
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: gray" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full text-gray rounded-md border-1 border-gray-100 focus:border-indigo-500 focus:ring-indigo-500" style="background-color: #ffffff;" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-white">
                        {{ __('Your email address is unverified.') }}
    
                        <button form="send-verification" class="underline text-sm text-white-600 dark:text-white-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
    
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    
        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: #4E9F3D; color: white">{{ __('Opslaan') }}</x-primary-button>
        
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
        
    </form>
    
</section>
