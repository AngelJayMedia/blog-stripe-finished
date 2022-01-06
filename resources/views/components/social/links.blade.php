<div class="flex flex-wrap gap-3">

    {{-- Facebook --}}
    <x-buttons.social href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank">
        <x-fab-facebook-f class="w-5 h-5" />
    </x-buttons.social>

    {{-- Twitter --}}
    <x-buttons.social href="https://twitter.com/intent/tweet?url={{ $url }}text={{ $post->title() }}" target="_blank">
        <x-fab-twitter class="w-5 h-5" />
    </x-buttons.social>

    {{-- Whatsapp --}}
    <x-buttons.social href="https://wa.me/?text={{ $post->title() }} {{ $url }}" target="_blank">
        <x-fab-whatsapp class="w-5 h-5" />
    </x-buttons.social>

    {{-- Telegram --}}
    <x-buttons.social href="https://telegram.me/share/url?url={{ $url }}&text={{ $post->title() }}" target="_blank">
        <x-fab-telegram-plane class="w-5 h-5" />
    </x-buttons.social>

</div>
