<x-layouts.auth.simple>

   <div class="flex flex-col gap-6">
    <x-auth-header
        :title="__('Confirm password')"
        :description="__('This is a secure area of the application. Please confirm your password before continuing.')"
    />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" action="/user/confirm-password" class="flex flex-col gap-6">
      @csrf
        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <flux:button variant="primary" type="submit" class="w-full cursor-pointer">{{ __('Confirm') }}</flux:button>
    </form>
  </div>

    
</x-layouts.auth.simple>