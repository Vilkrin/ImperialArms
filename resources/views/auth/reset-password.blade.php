<x-layouts.auth.simple>

    <div class="flex flex-col gap-6">
        <x-auth-header
            :title="__('Reset Password')"
            :description="__('Enter Your Email, New Password, and Confirm Password to reset your password.')"
        />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/reset-password" method="POST" class="flex flex-col gap-6">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <flux:input
                :label="__('Email address')"
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <flux:input
                :label="__('Password')"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
            />

            <!-- Confirm Password -->
            <flux:input
                :label="__('Confirm Password')"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm Password')"
            />

            <flux:button variant="primary" type="submit" class="w-full cursor-pointer">{{ __('Reset Password') }}</flux:button>
        </form>
    </div>

</x-layouts.auth.simple>