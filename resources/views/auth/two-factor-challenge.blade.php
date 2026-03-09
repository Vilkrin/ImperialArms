<x-layouts.auth.simple>

   <div class="flex flex-col gap-6">
    <x-auth-header :title="__('2FA Verification')" :description="__('Please enter the code from your authenticator app')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />
      <div>
        <flux:card>
        <form wire:submit="verify" class="space-y-8">
            <div class="max-w-64 mx-auto space-y-2">
                <flux:heading size="lg" class="text-center">Verify your account</flux:heading>
                <flux:text class="text-center">Please enter a one-time password from the authenticator app.</flux:text>
            </div>

            <flux:otp wire:model="code" label="OTP Code" label:sr-only :error:icon="false" error:class="text-center" class="mx-auto"> 
              <flux:otp.input />
              <flux:otp.input />
              <flux:otp.input />
              <flux:otp.separator />
              <flux:otp.input />
              <flux:otp.input />
              <flux:otp.input />
            </flux:otp>

            <div class="space-y-4">
                <flux:button variant="primary" type="submit" class="w-full">Verify</flux:button>
            </div>
        </form>
        </flux:card>
      </div>

   </div>
    
</x-layouts.auth.simple>