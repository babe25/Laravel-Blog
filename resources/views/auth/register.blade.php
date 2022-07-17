<x-guest-layout>
    <x-jet-authentication-card>

        <x-jet-validation-errors class="absolute top-8" />

        <form method="POST" action="{{ route('register') }}" class="pt-32">
            @csrf

            <div>
                <label class="block font-medium text-sm text-white" for="name">Name</label>
                <input id="name"
                    class="block w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white active:bg-transparent read-only:bg-gray-900"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-10">
                <label class="block font-medium text-sm text-white" for="email">Email</label>
                <input id="email"
                    class="block w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white active:bg-transparent read-only:bg-gray-900"
                    type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-10">
                <label class="block font-medium text-sm text-white" for="password">Password</label>
                <input id="password"
                    class="block w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white active:bg-transparent read-only:bg-gray-900"
                    type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-10">
                <label class="block font-medium text-sm text-white" for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation"
                    class="block w-full border-0 border-b-2 focus:outline-none focus:ring-0 bg-transparent text-white active:bg-transparent read-only:bg-gray-900"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-10">
                <a class="mr-5 underline text-sm text-white hover:text-gray-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-bold text-xs text-zinc-900 uppercase tracking-widest hover:bg-gray-600 hover:text-white active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Register</button>
            </div>
        </form>

        {{-- <div class="hover:text-zinc-800 duration-300 block">
            <a href="/" class="inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
            </a>
        </div> --}}
    </x-jet-authentication-card>
</x-guest-layout>
