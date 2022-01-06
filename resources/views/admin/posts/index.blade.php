<x-admin-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-gray-500">
                    <tr>
                        <x-table.head>Title</x-table.head>
                        <x-table.head>Excerpt</x-table.head>
                        <x-table.head class="text-center">Author</x-table.head>
                        <x-table.head class="text-center">Created At</x-table.head>
                        <x-table.head class="text-center">Published At</x-table.head>
                        <x-table.head class="text-center">Action</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($posts as $post)
                    <tr>
                        <x-table.data>
                            <div>{{ $post->title() }}</div>
                        </x-table.data>

                        <x-table.data>
                            <div>{{ $post->excerpt(50) }}</div>
                        </x-table.data>

                        <x-table.data>
                            <div class="text-center">
                                {{ $post->author()->name() }}
                            </div>
                        </x-table.data>
                        <x-table.data>
                            <div class="text-center text-gray-700">
                                {{ $post->created_at }}
                            </div>
                        </x-table.data>

                        <x-table.data>
                            <div class="text-center">
                                {{ $post->published_at }}
                            </div>
                        </x-table.data>

                        <x-table.data>
                            <div class="flex items-center justify-center space-x-4">

                                <x-link.warning href="{{ route('admin.posts.edit', $post) }}">
                                    {{ __('Edit') }}
                                </x-link.warning>

                                <x-form action=" {{ route('admin.posts.destroy', $post) }}" method="DELETE">
                                    <x-buttons.danger>
                                        {{ __('Delete') }}
                                    </x-buttons.danger>
                                </x-form>

                            </div>
                        </x-table.data>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-2 mt-6 bg-gray-200">
                {{ $posts->render() }}
            </div>
        </div>
    </section>
</x-admin-layout>
