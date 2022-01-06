{{-- Facebook --}}
@if(!empty($author->facebookProfile()))
<a href="{{ $author->facebookProfile() }}" target="_blank">
    <x-fab-facebook-f class="h-4 text-gray-800" />
</a>
@endif

{{-- Twitter --}}
@if(!empty($author->twitterProfile()))
<a href="{{ $author->twitterProfile() }}" target="_blank">
    <x-fab-twitter class="h-4 text-gray-800" />
</a>
@endif

{{-- Instagram --}}
@if(!empty($author->instagramProfile()))
<a href="{{ $author->instagramProfile() }}" target="_blank">
    <x-fab-instagram-square class="h-4 text-gray-800" />
</a>
@endif

{{-- LinkedIn --}}
@if(!empty($author->linkedInProfile()))
<a href="{{ $author->linkedInProfile() }}" target="_blank">
    <x-fab-linkedin-in class="h-4 text-gray-800" />
</a>
@endif
