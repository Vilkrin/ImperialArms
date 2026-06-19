<x-layouts.main :title="sprintf('%s\'s Profile', $user->name)">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">User Profile</h1>

        <p class="mb-6">This is section is Work in progress.</p>
        <p class="mb-6">Will be updated with updates as and when Vilkrin has time to work on it.</p>
    </div>

    <section class="bg-slate-950">
        <livewire:user.profile :user="$user" />
    </section>

</x-layouts.main>