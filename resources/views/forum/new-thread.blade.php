<x-layouts.main :title="__('Forum')">

  <div class="pt-20 pb-16">
    <div class="container mx-auto px-4 max-w-3xl">
      <div class="mb-6 flex items-center gap-2 text-sm text-slate-400 flex-wrap">
        <a href="{{ route('home') }}" class="hover:text-amber-400">Home</a><span>›</span>
        <a href="{{ route('forum.index') }}" class="hover:text-amber-400">Forum</a><span>›</span>
        <a href="{{ route('forum.category') }}" class="hover:text-amber-400">General Discussion</a><span>›</span>
        <span class="text-slate-100">New Topic</span>
      </div>

      <h1 class="font-orbitron text-2xl md:text-3xl font-bold mb-6">Create New Topic</h1>

      <form id="newTopicForm" onsubmit="return submitTopic(event)">
        <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-6 space-y-5">
          <div>
            <label class="font-exo text-sm text-slate-300 block mb-1">Forum</label>
            <select id="boardSelect" class="w-full h-10 rounded-md border border-slate-700 bg-slate-900/50 px-3 text-sm font-exo focus:outline-none focus:ring-1 focus:ring-amber-400">
              <optgroup label="Community">
                <option value="general" selected>General Discussion</option>
                <option value="introductions">Introductions &amp; Recruitment</option>
              </optgroup>
              <optgroup label="Operations &amp; Fleet">
                <option value="fleet-ops">Fleet Operations</option>
                <option value="ship-talk">Ship Talk</option>
              </optgroup>
              <optgroup label="Marketplace &amp; Services">
                <option value="trading">Trading &amp; Commerce</option>
              </optgroup>
              <optgroup label="Off-Topic">
                <option value="off-topic">Off-Topic</option>
              </optgroup>
            </select>
          </div>

          <div>
            <label class="font-exo text-sm text-slate-300 block mb-1">Topic Title</label>
            <input id="topicTitle" type="text" maxlength="120" placeholder="What's your topic about?" class="w-full h-10 rounded-md border border-slate-700 bg-slate-900/50 px-3 text-sm font-exo focus:outline-none focus:ring-1 focus:ring-amber-400" oninput="document.getElementById('charCount').textContent = this.value.length" />
            <p class="text-xs text-slate-400 mt-1 font-exo"><span id="charCount">0</span>/120 characters</p>
          </div>

          <div>
            <label class="font-exo text-sm text-slate-300 block mb-1">Content</label>
            <textarea id="topicContent" rows="8" placeholder="Write your post content here..." class="w-full min-h-[200px] rounded-md border border-slate-700 bg-slate-900/50 px-3 py-2 text-sm font-exo focus:outline-none focus:ring-1 focus:ring-amber-400"></textarea>
          </div>

          <div>
            <label class="font-exo text-sm text-slate-300 block mb-1">Tags (up to 5)</label>
            <div class="flex gap-2 mt-1">
              <input id="tagInput" type="text" placeholder="Add a tag and press Enter" class="flex-1 h-10 rounded-md border border-slate-700 bg-slate-900/50 px-3 text-sm font-exo focus:outline-none focus:ring-1 focus:ring-amber-400" />
              <button type="button" onclick="addTag()" class="h-10 px-4 border border-slate-700 rounded-md text-sm hover:bg-slate-800/50">Add</button>
            </div>
            <div id="tagList" class="flex flex-wrap gap-1.5 mt-2"></div>
          </div>
        </div>

        <div class="flex justify-end gap-3 mt-4">
          <a href="forum-category.html" class="inline-flex items-center h-10 px-4 border border-slate-700 rounded-md text-sm hover:bg-slate-800/50">Cancel</a>
          <button type="submit" class="inline-flex items-center h-10 px-4 bg-amber-400 text-slate-900 rounded-md text-sm font-exo font-medium hover:bg-amber-300">Post Topic</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const tags = [];
    const slugMap = { general: 'forum-category.html', introductions: 'forum-category.html?slug=introductions', 'fleet-ops': 'forum-category.html?slug=fleet-ops', 'ship-talk': 'forum-category.html?slug=ship-talk', trading: 'forum-category.html?slug=trading', 'off-topic': 'forum-category.html?slug=off-topic' };

    document.getElementById('tagInput')?.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') { e.preventDefault(); addTag(); }
    });

    function addTag() {
      const input = document.getElementById('tagInput');
      const tag = input.value.trim().toLowerCase();
      if (!tag || tags.includes(tag) || tags.length >= 5) return;
      tags.push(tag);
      input.value = '';
      renderTags();
    }

    function removeTag(tag) {
      const i = tags.indexOf(tag);
      if (i >= 0) tags.splice(i, 1);
      renderTags();
    }

    function renderTags() {
      const el = document.getElementById('tagList');
      el.innerHTML = tags.map((t) => `<button type="button" onclick="removeTag('${t}')" class="inline-flex px-2 py-0.5 rounded text-xs bg-slate-800 text-slate-300 hover:bg-red-500/20 hover:text-red-400 cursor-pointer">${t} ×</button>`).join('');
      document.getElementById('tagInput').disabled = tags.length >= 5;
    }

    function submitTopic(e) {
      e.preventDefault();
      const title = document.getElementById('topicTitle').value.trim();
      const content = document.getElementById('topicContent').value.trim();
      const board = document.getElementById('boardSelect').value;
      if (!title || !content || !board) { alert('Please fill in the title, content, and select a forum.'); return false; }
      alert('Topic created! Your topic has been posted successfully.');
      window.location.href = slugMap[board] || 'forum.html';
      return false;
    }

    // Pre-select from URL ?slug=general
    const slug = new URLSearchParams(location.search).get('slug');
    if (slug && document.querySelector(`#boardSelect option[value="${slug}"]`)) {
      document.getElementById('boardSelect').value = slug;
    }
  </script>

</x-layouts.main>