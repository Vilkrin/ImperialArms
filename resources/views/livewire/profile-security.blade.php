<div>
    
                  <form wire:submit.prevent="updatePassword">
                    <div>
                      <label class="text-sm font-medium text-slate-200">Change Password</label>
                      <div class="mt-2 space-y-3">
                        <input type="password" placeholder="Current password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                        <input type="password" placeholder="New password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                        
                        <input type="password" placeholder="Confirm new password" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                          @error('confirm_password')
                              <span role="alert" class="text-danger">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        <button class="inline-flex items-center justify-center h-9 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300">Update Password</button>
                      </div>

                    </div>
                  </form>
                    <div class="pt-4">

                    </div>

                        @if ($errors->any())
                            <div>
                                <div>Something went wrong!</div>

                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('status') == 'two-factor-authentication-enabled')
                            <div class="mb-4 font-medium text-sm">
                                Please finish configuring two-factor authentication below.
                            </div>
                        @endif

                        @if (session('status') == 'two-factor-authentication-confirmed')
                          <div class="mb-4 font-medium text-sm">
                              Two-factor authentication confirmed and enabled successfully.
                          </div>
                        @endif

                    <div class="pt-4 border-t border-slate-800">
                      <label class="text-sm font-medium text-slate-200">Two-Factor Authentication</label>
                      <div class="mt-2 flex items-center justify-between">
                        {{-- <p class="text-sm text-slate-300">Coming Soon - Not implemented yet.</p> --}}
   
                      </div>

                          @if (auth()->user()->two_factor_secret)
                              <div>
                                  {!! auth()->user()->twoFactorQrCodeSvg() !!}
                              </div>

                              <div>
                                  @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                                      <div>{{ $code }}</div>
                                  @endforeach
                              </div>

                              <div>
                                  <form action="/user/two-factor-recovery-codes" method="POST">
                                      @csrf
                                      <div>
                                          <button>Regenerate Codes</button>
                                      </div>
                                  </form>
                              </div>
                          @endif

                      @if (! auth()->user()->two_factor_secret)
                      <form action="/user/two-factor-authentication" method="POST">
                        @csrf

                          <div class="mt-2 flex items-center justify-between">
                            <p class="text-sm text-slate-300">Add an extra layer of security to your account</p>
                            <button class="inline-flex items-center justify-center h-9 px-4 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-300 hover:bg-slate-800/50 cursor-pointer">Enable 2FA</button>
                          

                      </form>
                          @else
                      <form action="/user/two-factor-authentication" method="POST">
                          @csrf
                          @method('delete')
                          <div>
                              <button>Disable</button>
                          </div>
                      </form>
                        @endif
                      </div>
                    </div>

                 
</div>
