<div class="space-y-6">

    <div class="border-b-2 border-theme-blue-100">
        <h2 class="inline-block p-2 text-sm text-white uppercase rounded-t bg-theme-blue-100">
            Post a comment
        </h2>
    </div>

    {{-- Comment Count --}}
    <span class="block">20 Comments</span>

    {{-- Comment Form --}}
    <div class="">
        <x-form action="{{ route('comments.store') }}" class="space-y-4">
            <x-form.textarea name="body" placeholder="Leave a comment here...">
                {{ old('body') }}
            </x-form.textarea>
            <x-form.error for="body" />

            <input type="hidden" name="commentable_id" value="{{ $post->id() }}">
            <input type="hidden" name="commentable_type" value="posts">
            <input type="hidden" name="depth" value="0">

            <x-buttons.default>
                Subit
            </x-buttons.default>
        </x-form>
    </div>

    <section class="flex flex-col gap-4 p-2">
        <x-posts.replies :comments="$post->comments()" :post="$post" />
    </section>

</div>
