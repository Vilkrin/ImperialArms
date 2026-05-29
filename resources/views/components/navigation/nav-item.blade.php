@if ($iconClass())
    <span {{ $attributes->merge([
        'class' => 'inline-flex h-4 w-4 shrink-0 items-center justify-center text-slate-300'
    ]) }}>
        <i class="{{ $iconClass() }} text-[13px] leading-none"></i>
    </span>
@endif