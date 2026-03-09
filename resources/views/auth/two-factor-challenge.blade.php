<x-layouts.auth.simple>

    <div class="flex flex-col gap-6">

        <x-auth-header 
            :title="__('2FA Verification')" 
            :description="__('Please enter the code from your authenticator app')" 
        />

        <x-auth-session-status class="text-center" :status="session('status')" />

        <div x-data="{ recovery: false }">

        <flux:card>

        <form method="POST" action="/two-factor-challenge" class="space-y-6">
        @csrf

        <!-- OTP HEADER -->
        <div x-show="!recovery" class="max-w-64 mx-auto space-y-2">
            <flux:heading size="lg" class="text-center">
                Verify your account
            </flux:heading>

            <flux:text class="text-center">
                Please enter a one-time password from the authenticator app.
            </flux:text>
        </div>

        <!-- RECOVERY HEADER -->
        <div x-show="recovery" class="max-w-64 mx-auto space-y-2">
            <flux:heading size="lg" class="text-center">
                Verify your account
            </flux:heading>

            <flux:text class="text-center">
                Please enter a recovery code.
            </flux:text>
        </div>


        <!-- OTP INPUT -->
        <div x-show="!recovery">

        <flux:otp 
            x-model="code"
            name="code"
            label="OTP Code"
            label:sr-only
            :error:icon="false"
            error:class="text-center"
            class="mx-auto">

            <flux:otp.input />
            <flux:otp.input />
            <flux:otp.input />
            <flux:otp.separator />
            <flux:otp.input />
            <flux:otp.input />
            <flux:otp.input />

        </flux:otp>

        </div>


            <!-- RECOVERY INPUT -->
            <div x-show="recovery">

            <flux:input
                type="text"
                name="recovery_code"
                x-ref="recovery_code"
                x-bind:required="showRecoveryInput"
                autocomplete="one-time-code"
                x-model="recovery_code"
                class="mx-auto"
            />

            </div>


            <div class="space-y-4">

            <flux:button variant="primary" type="submit" class="w-full cursor-pointer">
            Verify
            </flux:button>

            <flux:button
                type="button"
                x-on:click="recovery = !recovery"
                class="w-full"
            >
            <span x-show="!recovery" class="cursor-pointer">Use Recovery Code</span>
            <span x-show="recovery">Use Authenticator Code</span>
            </flux:button>

            </div>

            </form>

            </flux:card>

            </div>
        </div>

</x-layouts.auth.simple>