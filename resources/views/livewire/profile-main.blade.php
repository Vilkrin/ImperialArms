<div>
    
                     <form wire:submit.prevent="save">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <!-- Full Name -->
                      <div class="space-y-2">
                        <label for="name" class="block text-sm font-medium leading-none text-slate-200">Name</label>
                        <input id="name" value="{{ $user->name }}" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900 px-3 py-2 text-base text-slate-100 ring-offset-slate-950 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" readonly />
                      @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                      </div>

                      <!-- Email -->
                      <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium leading-none text-slate-200">Email</label>
                        <div class="relative">
                        <input id="email" type="email" value="{{ $user->email }}" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900 px-3 py-2 text-base text-slate-100 ring-offset-slate-950 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" readonly />
                         @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                          <div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center gap-2">
                          @if ($user->email_verified_at)
                              <span class="text-green-500 text-sm flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                  Verified
                              </span>
                          @else
                              <span class="text-yellow-500 text-sm flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                  </svg>
                                  Not Verified
                              </span>
                              <a href="{{ route('verification.notice') }}" class="text-purple-400 hover:text-purple-300 text-sm">
                                  Resend
                              </a>
                          @endif
                          </div>
                        </div>
                      </div>

                      <!-- Call Sign -->
                      <div class="space-y-2">
                        <label for="callSign" class="block text-sm font-medium leading-none text-slate-200">Call Sign</label>
                        <input id="callSign" value="ALPHA-7" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900 px-3 py-2 text-base text-slate-100 font-mono ring-offset-slate-950 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-amber-400 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" />
                      </div>

                      <!-- Rank -->
                      <div class="space-y-2">
                        <label class="block text-sm font-medium leading-none text-slate-200">Rank</label>
                        <div class="h-10 flex items-center">
                          <span class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-sm font-semibold border-slate-700 bg-slate-800 text-amber-400">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8l-2 4h4l-2 4"/></svg>
                            Captain
                          </span>
                        </div>
                      </div>

                      <!-- Join Date -->
                      <div class="space-y-2">
                        <label class="block text-sm font-medium leading-none text-slate-200">Join Date</label>
                        <div class="h-10 flex items-center text-slate-300">
                          <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M4 11h16M5 19h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
                          2953.03.15
                        </div>
                      </div>

                      <!-- Flight Hours -->
                      <div class="space-y-2">
                        <label class="block text-sm font-medium leading-none text-slate-200">Flight Hours</label>
                        <div class="h-10 flex items-center text-slate-300 font-mono">1,247</div>
                      </div>
                    </div>                     
                     
                    <div class="flex justify-end pt-4">
                      <button id="saveBtn" class="inline-flex items-center gap-2 h-9 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Save Changes
                      </button>
                      <flux:button variant="primary" color="amber" wire:click="save">Save Changes</flux:button>
                    </div>     
                     </form>  

</div>
