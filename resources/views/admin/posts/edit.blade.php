<x-admin-layout>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/choices.css') }}">
    @endpush

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Posts: Edit') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form action="{{ route('admin.posts.update', $post) }}" method="PUT" has-files>
                <div class="space-y-8">

                    {{-- Cover Image --}}
                    <div>
                        <x-form.label for="image" value="{{ __('Cover Image') }}" />
                        <x-form.input name="image" id="image" class="block w-full mt-1" type="file" :value="old('image')" required />
                        <x-form.error for="image" />
                    </div>

                    {{-- Title --}}
                    <div>
                        <x-form.label for="title" value="{{ __('Title') }}" />
                        <x-form.input name="title" id="title" class="block w-full mt-1" type="text" :value="$post->title()" autofocus />
                        <x-form.error for="title" />
                    </div>

                    {{-- Body --}}
                    <div class="">
                        <x-form.label for="body" value="{{ __('Content') }}" />
                        <x-trix name="body">
                            {{ $post->body() }}
                        </x-trix>
                        <x-form.error for="body" />
                    </div>

                    {{-- Published At --}}
                    <div>
                        <x-form.label for="published_at" value="{{ __('Published At') }}" />
                        <x-pikaday name="published_at" value="{{ $post->publishedAt() }}" />
                        <x-form.error for="published_at" />
                    </div>

                    {{-- Type --}}
                    <div class="">
                        <x-form.label for="type" value="{{ __('Type') }}" />
                        <select name="type" id="type">
                            <option value="standard" @if($post->type() === 'standard') selected @endif>Standard</option>
                            <option value="premium" @if($post->type() === 'premium') selected @endif>Premium</option>
                        </select>
                    </div>

                    {{-- Tags --}}
                    <div class="">
                        <x-form.label for="tags" value="{{ __('Tags') }}" />
                        <select name="tags[]" id="tags" multiple x-data="{}" x-init="function () { choices($el) }">
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id() }}" @if(in_array($tag->id(), $selectedTags))
                                selected
                                @endif
                                >{{ $tag->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Photo credit text --}}
                    <div>
                        <x-form.label for="photo_credit_text" value="{{ __('Photo credit text') }}" />
                        <x-form.input name="photo_credit_text" id="photo_credit_text" class="block w-full mt-1" type="text" :value="$post->photoCreditText()" />
                        <x-form.error for="photo_credit_text" />
                    </div>

                    {{-- Photo Credit link --}}
                    <div>
                        <x-form.label for="photo_credit_link" value="{{ __('Photo credit link') }}" />
                        <x-form.input name="photo_credit_link" id="photo_credit_link" class="block w-full mt-1" type="text" :value="$post->photoCreditLink()" />
                        <x-form.error for="photo_credit_link" />
                    </div>

                    {{-- Disable Comments --}}
                    <div class="">
                        <input type="checkbox" name="is_commentable" value="1" @if(!$post->isCommentable())checked @endif
                        />
                        <span class="text-xs font-semibold text-blue-500 uppercase">Disable Comments</span>
                        <x-form.error for="is_commentable" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('Update') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
    </x-app-layout>
