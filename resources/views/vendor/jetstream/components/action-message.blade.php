@props(['on'])

<div x-data="{ shown: false, timeout: null }" x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms style="display: none;" {{ $attributes->merge(['class' => 'text-sm text-green-400 font-bold']) }}>
    {{ $slot->isEmpty() ? 'Saved.' : $slot }}
</div>
