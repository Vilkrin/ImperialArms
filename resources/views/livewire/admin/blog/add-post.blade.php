<div>
                <!-- Page actions (matches React page-level top bar) -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                    <a href="posts.html" class="inline-flex items-center gap-2 text-slate-300 hover:text-amber-400 transition-colors">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Back to Posts
                    </a>
                    <div class="flex items-center gap-3">
                        <button id="saveDraftBtn" class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 rounded-md text-sm text-slate-200 hover:bg-slate-800/50 transition-colors">Save Draft</button>
                        <button id="publishBtn" class="inline-flex items-center justify-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-300 transition-colors">Publish</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-[1fr_20rem] gap-6">
                    <!-- Editor -->
                    <div class="space-y-6">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <h2 class="text-lg font-semibold text-slate-100">Post Content</h2>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Title</label>
                                    <input id="title" placeholder="Enter post title..." class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Excerpt</label>
                                    <textarea id="excerpt" rows="3" placeholder="Brief summary of the post..." class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"></textarea>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Content</label>
                                    <textarea id="content" rows="18" placeholder="Write your post content here... (Markdown supported)" class="min-h-[360px] flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm font-mono placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings -->
                    <div class="space-y-4">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="publish">
                                <span class="font-semibold text-slate-100">Publish Settings</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div id="collapsible-publish" class="p-4 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Status</label>
                                    <select class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Publish Date</label>
                                    <input type="date" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <label class="flex items-center justify-between gap-3">
                                    <span class="text-sm font-medium text-slate-200">Featured Post</span>
                                    <input type="checkbox" class="h-4 w-4 accent-amber-400" />
                                </label>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="details">
                                <span class="font-semibold text-slate-100">Post Details</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div id="collapsible-details" class="p-4 space-y-4">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Author</label>
                                    <input id="author" placeholder="Author name" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Category</label>
                                    <select id="category" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="">Select category</option>
                                        <option>Technology</option><option>Strategy</option><option>Operations</option><option>Recruitment</option><option>Economics</option><option>Training</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Read Time</label>
                                    <input id="readTime" placeholder="e.g. 5 min read" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button type="button" class="w-full flex items-center justify-between p-4 border-b border-slate-700 hover:bg-slate-800/40 transition-colors" data-collapsible="seo">
                                <span class="font-semibold text-slate-100">SEO Settings</span>
                                <svg class="h-4 w-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div id="collapsible-seo" class="p-4 space-y-4 hidden">
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">URL Slug</label>
                                    <input id="slug" placeholder="post-url-slug" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                    <p class="text-xs text-slate-400">Preview: <span class="text-slate-300">/blog/</span><span id="slugPreview" class="text-slate-300">post-url-slug</span></p>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Meta Title</label>
                                    <input id="metaTitle" placeholder="SEO title" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-medium text-slate-200">Meta Description</label>
                                    <textarea id="metaDescription" rows="3" placeholder="SEO description" class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

    <script>
        // Sidebar toggle (same as other pages)
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('aside');
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-14');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => { el.style.display = 'none'; });
                } else {
                    sidebar.classList.remove('w-14');
                    sidebar.classList.add('w-64');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => { el.style.display = ''; });
                }
            });
        }

        // Collapsibles (simple)
        document.querySelectorAll('[data-collapsible]').forEach((btn) => {
            btn.addEventListener('click', () => {
                const key = btn.getAttribute('data-collapsible');
                const el = document.getElementById(`collapsible-${key}`);
                if (el) el.classList.toggle('hidden');
            });
        });

        // Title -> slug/meta sync (matches AddPost.tsx behavior)
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const metaTitleInput = document.getElementById('metaTitle');
        const slugPreview = document.getElementById('slugPreview');
        const generateSlug = (title) => (title || "")
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, "-")
            .replace(/(^-|-$)/g, "");

        const syncFromTitle = () => {
            const title = titleInput?.value || "";
            const slug = generateSlug(title) || "";
            if (slugInput) slugInput.value = slug;
            if (metaTitleInput) metaTitleInput.value = title;
            if (slugPreview) slugPreview.textContent = slug || "post-url-slug";
        };

        const syncSlugPreview = () => {
            if (!slugInput || !slugPreview) return;
            slugPreview.textContent = slugInput.value || "post-url-slug";
        };

        titleInput?.addEventListener('input', syncFromTitle);
        slugInput?.addEventListener('input', syncSlugPreview);
        syncFromTitle();

        // Buttons (static demo)
        const saveDraftBtn = document.getElementById('saveDraftBtn');
        const publishBtn = document.getElementById('publishBtn');
        const showToast = (title, description) => {
            const el = document.createElement('div');
            el.className = "fixed bottom-6 right-6 z-[200] max-w-sm bg-slate-900 border border-slate-700 rounded-lg shadow-xl p-4";
            el.innerHTML = `<div class="text-sm font-semibold text-slate-100">${title}</div><div class="text-sm text-slate-400 mt-1">${description}</div>`;
            document.body.appendChild(el);
            setTimeout(() => el.remove(), 2500);
        };
        saveDraftBtn?.addEventListener('click', () => showToast("Draft saved", "Your post has been saved as a draft."));
        publishBtn?.addEventListener('click', () => showToast("Post published", "Your post has been published."));
    </script>