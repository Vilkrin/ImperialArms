<x-layouts.admin :title="__('Page Management')">


                  <!-- Action Buttons Bar -->
                <div class="flex items-center justify-between mb-6 p-4 border border-slate-700 rounded-lg bg-slate-900/50 backdrop-blur-sm">
                    <div class="flex items-center gap-4">
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-sm font-medium hover:bg-slate-800 transition-colors">
                            Save Draft
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 border border-slate-700 bg-slate-900/50 text-slate-300 rounded-md text-sm font-medium hover:bg-slate-800 transition-colors">
                            Preview
                        </button>
                        <button class="inline-flex items-center justify-center px-4 py-2 bg-amber-400 text-slate-900 rounded-md text-sm font-medium hover:bg-amber-500 transition-colors">
                            Publish
                        </button>
                    </div>
                    <div class="text-sm text-slate-400">
                        Last saved: Never
                    </div>
                </div>

                <div class="flex gap-6 w-full">
                    <!-- Main Content Area -->
                    <div class="flex-1 space-y-6">
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <div class="p-6 border-b border-slate-700">
                                <h2 class="text-xl font-semibold text-slate-100">Page Content</h2>
                            </div>
                            <div class="p-6 space-y-6">
                                <div class="grid gap-2">
                                    <input type="text" id="title" placeholder="Enter page title here..." class="flex h-12 w-full bg-transparent px-0 text-xl font-semibold text-slate-100 placeholder:text-slate-500 focus-visible:outline-none border-none">
                                </div>
                                
                                <div class="grid gap-2">
                                    <label for="content" class="block text-sm font-medium text-slate-300">Content</label>
                                    <x-forms.tinymce-editor 
                                        name="content" 
                                        class="tinymce-editor"
                                        :value="old('content', $post->content ?? '')" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sidebar -->
                    <div class="w-80 space-y-4">
                        <!-- Publish Settings -->
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button id="publishToggle" class="flex items-center justify-between w-full p-4 hover:bg-slate-800/50 transition-colors">
                                <h3 class="font-semibold text-slate-100">Publish Settings</h3>
                                <svg class="h-4 w-4 text-slate-400 transition-transform" id="publishChevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="publishContent" class="p-6 pt-0 space-y-4">
                                <div class="grid gap-2">
                                    <label for="status" class="block text-sm font-medium text-slate-300">Status</label>
                                    <select id="status" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="draft" selected>Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                                
                                <div class="grid gap-2">
                                    <label for="visibility" class="block text-sm font-medium text-slate-300">Visibility</label>
                                    <select id="visibility" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="public" selected>Public</option>
                                        <option value="private">Private</option>
                                    </select>
                                </div>

                                <div class="grid gap-2">
                                    <label for="publishDate" class="block text-sm font-medium text-slate-300">Publish Date</label>
                                    <input type="date" id="publishDate" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                </div>
                            </div>
                        </div>

                        <!-- Page Attributes -->
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button id="attributesToggle" class="flex items-center justify-between w-full p-4 hover:bg-slate-800/50 transition-colors">
                                <h3 class="font-semibold text-slate-100">Page Attributes</h3>
                                <svg class="h-4 w-4 text-slate-400 transition-transform" id="attributesChevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="attributesContent" class="p-6 pt-0 space-y-4">
                                <div class="grid gap-2">
                                    <label for="parent" class="block text-sm font-medium text-slate-300">Parent Page</label>
                                    <select id="parent" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="none" selected>None (Main Page)</option>
                                        <option value="about">About Us</option>
                                        <option value="services">Services</option>
                                        <option value="products">Products</option>
                                    </select>
                                </div>

                                <div class="grid gap-2">
                                    <label for="template" class="block text-sm font-medium text-slate-300">Page Template</label>
                                    <select id="template" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                        <option value="standard" selected>Standard Page</option>
                                        <option value="homepage">Homepage</option>
                                        <option value="contact">Contact Page</option>
                                        <option value="legal">Legal Page</option>
                                        <option value="landing">Landing Page</option>
                                    </select>
                                </div>

                                <div class="grid gap-2">
                                    <label for="order" class="block text-sm font-medium text-slate-300">Order</label>
                                    <input type="number" id="order" value="0" placeholder="0" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                </div>
                            </div>
                        </div>

                        <!-- SEO Settings -->
                        <div class="bg-slate-900/50 border border-amber-400/20 backdrop-blur-sm rounded-lg shadow-sm">
                            <button id="seoToggle" class="flex items-center justify-between w-full p-4 hover:bg-slate-800/50 transition-colors">
                                <h3 class="font-semibold text-slate-100">SEO Settings</h3>
                                <svg class="h-4 w-4 text-slate-400 transition-transform" id="seoChevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="seoContent" class="p-6 pt-0 space-y-4">
                                <div class="grid gap-2">
                                    <label for="slug" class="block text-sm font-medium text-slate-300">URL Slug</label>
                                    <input type="text" id="slug" placeholder="page-url-slug" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                    <p class="text-xs text-slate-400">Preview: /pages/page-url-slug</p>
                                </div>

                                <div class="grid gap-2">
                                    <label for="metaTitle" class="block text-sm font-medium text-slate-300">Meta Title</label>
                                    <input type="text" id="metaTitle" placeholder="SEO title for search engines" class="flex h-10 w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400">
                                </div>

                                <div class="grid gap-2">
                                    <label for="metaDescription" class="block text-sm font-medium text-slate-300">Meta Description</label>
                                    <textarea id="metaDescription" rows="3" placeholder="Brief description for search engines (150-160 characters)" class="flex w-full rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm text-slate-100 placeholder:text-slate-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-amber-400"></textarea>
                                    <p class="text-xs text-slate-400">0/160 characters</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Dropdown functionality
        const notificationBtn = document.getElementById('notificationBtn');
        const notificationMenu = document.getElementById('notificationMenu');
        const userMenuBtn = document.getElementById('userMenuBtn');
        const userMenu = document.getElementById('userMenu');

        notificationBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notificationMenu.classList.toggle('hidden');
            userMenu.classList.add('hidden');
        });

        userMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
            notificationMenu.classList.add('hidden');
        });

        document.addEventListener('click', () => {
            notificationMenu.classList.add('hidden');
            userMenu.classList.add('hidden');
        });

        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('aside');
        
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-14');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => {
                        if (!el.closest('svg')) {
                            el.style.display = 'none';
                        }
                    });
                } else {
                    sidebar.classList.remove('w-14');
                    sidebar.classList.add('w-64');
                    sidebar.querySelectorAll('h2, h3, p, span').forEach(el => {
                        el.style.display = '';
                    });
                }
            });
        }

        // Collapsible sections
        function setupCollapsible(toggleId, contentId, chevronId) {
            const toggle = document.getElementById(toggleId);
            const content = document.getElementById(contentId);
            const chevron = document.getElementById(chevronId);
            
            if (toggle && content && chevron) {
                toggle.addEventListener('click', () => {
                    content.classList.toggle('hidden');
                    chevron.classList.toggle('rotate-180');
                });
            }
        }

        setupCollapsible('publishToggle', 'publishContent', 'publishChevron');
        setupCollapsible('attributesToggle', 'attributesContent', 'attributesChevron');
        setupCollapsible('seoToggle', 'seoContent', 'seoChevron');

        // Auto-generate slug from title
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const metaTitleInput = document.getElementById('metaTitle');

        if (titleInput && slugInput && metaTitleInput) {
            titleInput.addEventListener('input', (e) => {
                const title = e.target.value;
                const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                slugInput.value = slug;
                metaTitleInput.value = title;
                
                // Update preview
                const preview = slugInput.nextElementSibling;
                if (preview) {
                    preview.textContent = `Preview: /pages/${slug || 'page-url-slug'}`;
                }
            });
        }

        // Character count for meta description
        const metaDescInput = document.getElementById('metaDescription');
        if (metaDescInput) {
            metaDescInput.addEventListener('input', (e) => {
                const count = e.target.value.length;
                const counter = e.target.nextElementSibling;
                if (counter) {
                    counter.textContent = `${count}/160 characters`;
                }
            });
        }
    </script>
  

</x-layouts.admin>