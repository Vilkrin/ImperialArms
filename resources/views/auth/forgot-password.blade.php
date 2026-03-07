<x-layouts.auth.simple>

   <div class="mt-4 flex flex-col gap-6">
      <flux:text class="text-center">
         {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
      </flux:text>

      @if ($errors->any())
         <div class="mb-4 font-medium text-sm text-red-600">
            {{ __('Something went wrong!') }}
         </div>

         <ul class="mb-4 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      @endif

      @if (session('status') == 'password-reset-link-sent')
         <flux:text class="text-center font-medium !dark:text-green-400 !text-green-600">
               {{ __('A password reset link has been sent to the email address you provided.') }}
         </flux:text>
      @endif

         <form method="POST" action="/forgot-password" class="flex flex-col items-center justify-between space-y-3">
            @csrf

            <flux:input id="email" type="email" name="email" :label="__('Email')" required autofocus class="w-full" />

            <flux:button type="submit" variant="primary" class="w-full">
                  {{ __('Email Password Reset Link') }}
            </flux:button>
         </form>

         <div class="flex flex-col items-center justify-between space-y-3">
            <flux:link href="{{ route('login') }}" class="text-sm w-full text-center">
                  {{ __('Back to login') }}
            </flux:link>
         </div>
   </div>
         
    
</x-layouts.auth.simple>