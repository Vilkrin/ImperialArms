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

                    <div class="pt-4 border-t border-slate-800">
                      <label class="text-sm font-medium text-slate-200">Two-Factor Authentication</label>
                      <div class="mt-2 flex items-center justify-between">
                        <p class="text-sm text-slate-300">Coming Soon - Not implemented yet.</p>
   
                      </div>
                      <div class="mt-2 flex items-center justify-between">
                        <p class="text-sm text-slate-300">Add an extra layer of security to your account</p>
                        <button class="inline-flex items-center justify-center h-9 px-4 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-300 hover:bg-slate-800/50">Enable 2FA</button>
                      </div>
                    </div>

                  </form>
</div>
