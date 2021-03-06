<x-app-layout>
    <div class="container px-12 py-12 relative pt-24 pb-32 content-center items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                         style="background-image: url('{{ asset($post->image->url) }}'); box-shadow: inset 0px 0px 400px 110px rgba(0, 0, 0, .9);">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-4xl text-white leading-8 font-bold pb-3">
                            <a href="{{ route('post.show', $post) }}">
                                {{ $post->getNameByLang(app()->getLocale()) }}
                            </a>
                        </h1>
                        <div>
                            @foreach ($post->tags as $tag)
                                <a class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full"> {{ $tag->name }} </a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
