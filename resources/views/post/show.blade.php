<x-app-layout title="Edit Post  | {{ $post->title }}">




    <section>
        <div class="px-8 py-12 md:px-52 md:py-24">

            <div>
                {{ Breadcrumbs::render('post.show', $post) }}
            </div>

            <div>
                <h2>
                    {{ $post->title }}
                </h2>
                <small class="text-gray-600">Diposting {{ $post->created_at->toFormattedDateString('') }}</small>
            </div>

            <div class=" max-w-xl my-5">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->image }}" class="rounded">
            </div>

            {{-- body --}}
            <div class="body">
                {!! $post->body !!}
            </div>
        </div>
    </section>

</x-app-layout>
