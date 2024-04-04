<x-app-layout>

    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{ $category->name }}</h1>

        @foreach ($posts as $post)
            <article class="py-8">
                <img class="w-full h-24 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                <div class="px-6 py-8">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                    </h1>
                </div>
            </article>
        @endforeach
    </div>

</x-app-layout>
