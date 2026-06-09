<x-layouts.main :title="sprintf('%s\'s Profile', $user->name)">

    <section class="bg-slate-950">
        <livewire:user-profile :user="$user" />
    </section>

</x-layouts.main>