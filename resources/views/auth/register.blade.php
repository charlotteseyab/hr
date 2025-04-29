<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <x-label for="first_name" value="{{ __('First Name') }}" />
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" />
                </div>
                <div>
                    <x-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
                </div>
                <div>
                    <x-label for="phone" value="{{ __('Phone Number') }}" />
                    <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
                </div>
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
                <div>
                    <x-label for="role" value="{{ __('Registering as') }}" />
                    <select id="role" name="role" required class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="" disabled selected>Select your role</option>
                        <option value="employer">Employer</option>
                        <option value="job_seeker">Job Seeker</option>
                    </select>
                </div>
                <div>
                    <x-label for="how_heard" value="{{ __('How did you hear about us?') }}" />
                    <select id="how_heard" name="how_heard" required class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <option value="" disabled selected>Select an option</option>
                        <option value="Google Search">Google Search</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Friend/Colleague">Friend/Colleague</option>
                        <option value="Job Board">Job Board</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-blue-600 font-semibold hover:underline">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-blue-600 font-semibold hover:underline">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <div class="mt-6 text-center w-full">
                    <span class="text-sm text-gray-600">Already have an account? </span>
                    <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Login</a>
                </div>
                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
