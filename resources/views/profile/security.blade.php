<x-layouts.main :title="__('Account - Security')">

    <div class="max-w-4xl mx-auto p-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-4xl font-orbitron font-bold text-gradient mb-2">Account Profile</h1>
        <p class="text-slate-300">Manage your Imperial Arms account and pilot credentials</p>
      </div>

      <!-- Tabs -->
      <div class="space-y-6">
        <div class="grid grid-cols-3 gap-2 border border-slate-800 rounded-lg p-1 bg-slate-900/40">
          <a href="{{ route('profile.index') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Profile</a>
          <a href="{{ route('profile.security') }}" class="rounded-md py-2 text-sm font-medium bg-slate-800/70 text-amber-400 text-center">Security</a>
          <a href="{{ route('profile.ships') }}" class="rounded-md py-2 text-sm font-medium text-slate-300 hover:bg-slate-800/50 text-center">Ships</a>
        </div>

        <!-- Security Tab -->
        <section class="tab-pane">
          <div class="bg-slate-900/50 border border-amber-400/20 rounded-lg shadow">
            <div class="p-6 border-b border-slate-800">
              <h2 class="text-xl font-semibold flex items-center gap-2">
                <svg class="h-5 w-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4 9 5.567 9 7.5 10.343 11 12 11z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"/></svg>
                Security Settings
              </h2>
              <p class="text-sm text-slate-400">Manage your account security and authentication</p>
            </div>
              @if (session('status') === 'password-updated')
                  <div class="mb-4 font-medium text-sm text-green-600">
                      Password has been updated.
                  </div>
              @endif
            <div class="p-6 space-y-6">
              <form method="POST" action="/user/password">
                @csrf
                @method('PUT')
              <div>
                <label class="text-sm font-medium text-slate-200">Change Password</label>
                <div class="mt-2 space-y-3">
                  <input type="password" id="current_password" name="current_password" placeholder="Current password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                  <input type="password" id="password" name="password" placeholder="New password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                  <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                    @error('confirm_password')
                        <span role="alert" class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <button class="cursor-pointer inline-flex items-center justify-center h-9 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300">Update Password</button>
                </div>
              </div>
              </form>

              <div class="pt-4 border-t border-slate-800">
                <label class="text-sm font-medium text-slate-200">Two-Factor Authentication</label>
                <div class="mt-2">
                  <p class="text-sm text-slate-300">Add an extra layer of security to your account</p>
                </div>

                @if ($errors->any())
                    <div class="mt-4 p-3 bg-red-900/20 border border-red-700 rounded text-red-300 text-sm">
                        <div class="font-semibold mb-2">Something went wrong!</div>
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status') == 'two-factor-authentication-enabled')
                    <div class="mt-4 p-3 bg-blue-900/20 border border-blue-700 rounded text-blue-300 text-sm font-medium">
                        Please finish configuring two-factor authentication below.
                    </div>
                @endif

                @if (session('status') == 'two-factor-authentication-disabled')
                    <div class="mt-4 p-3 bg-blue-900/20 border border-blue-700 rounded text-blue-300 text-sm font-medium">
                        Two-factor authentication has been disabled.
                    </div>
                @endif

                @if (session('status') == 'two-factor-authentication-confirmed')
                    <div class="p-3 bg-green-900/20 border border-green-700 rounded text-green-300 text-sm font-medium">
                        Two-factor authentication confirmed and enabled successfully.
                    </div>
                @endif

                @if (!auth()->user()->two_factor_secret)
                    <form action="/user/two-factor-authentication" method="POST" class="mt-4">
                        @csrf
                        <button class="cursor-pointer inline-flex items-center justify-center h-9 px-4 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-300 hover:bg-slate-800/50">Enable 2FA</button>
                    </form>
                @else
                    <div class="mt-6 space-y-6">
                        <div class="grid grid-cols-3 gap-6">
                            <!-- QR Code -->
                            <div class="flex flex-col items-center p-4 border border-slate-700 rounded-lg bg-slate-900/30">
                                <p class="text-xs text-slate-400 mb-3">Scan with Authenticator App</p>
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </div>

                            <!-- Recovery Codes -->
                            <div class="col-span-2 p-4 border border-slate-700 rounded-lg bg-slate-900/30">
                                <p class="text-sm font-medium text-slate-200 mb-3">Recovery Codes</p>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                                        <div class="font-mono text-xs text-slate-300 bg-slate-900/50 p-2 rounded border border-slate-600">{{ $code }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- OTP Input and Buttons -->
                        <form method="POST" action="/user/confirmed-two-factor-authentication" class="space-y-4">
                            @csrf
                            <div class="p-4 border border-slate-700 rounded-lg bg-slate-900/30">
                                <p class="text-sm font-medium text-slate-200 mb-3">Enter 6-digit code</p>
                                <flux:otp wire:model="code" length="6" label="OTP Code" label:sr-only :error:icon="false" error:class="text-center" class="mx-auto mb-4" />
                                    {{-- <flux:otp.input />
                                    <flux:otp.input />
                                    <flux:otp.input />
                                    <flux:otp.separator />
                                    <flux:otp.input />
                                    <flux:otp.input />
                                    <flux:otp.input /> --}}
                                {{-- </flux:otp> --}}
                                <flux:button variant="primary" type="submit" class="w-full cursor-pointer">
                                    Confirm 2FA
                                </flux:button>
                            </div>
                        </form>

                        <!-- Management Buttons -->
                        <div class="flex gap-3">
                            <form action="/user/two-factor-recovery-codes" method="POST" class="flex-1">
                                @csrf
                                <button class="cursor-pointer inline-flex items-center justify-center h-9 px-4 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-300 hover:bg-slate-800/50 w-full">Regenerate Codes</button>
                            </form>
                            <form action="/user/two-factor-authentication" method="POST" class="flex-1">
                                @csrf
                                @method('delete')
                                <button class="cursor-pointer inline-flex items-center justify-center h-9 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 w-full">Disable 2FA</button>
                            </form>
                        </div>

                    </div>
                @endif
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>

</x-layouts.main>