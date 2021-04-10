<div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl sm:text-3xl md:text-5xl lg:text-5xl title-font text-center text-gray-900 mb-20">Últimas Entradas
    </h1>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        @foreach($posts as $post)
            <a href="{{ route('post.show', $post) }}"
                class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 p-4 md:w-1/3 flex mx-auto"
                data-class-in="translate-y-0 opacity-100"
                data-class-out="translate-y-32 opacity-0">
                <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-auto">
                    <img class="w-full" src="{{ asset($post->image->url )}}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $post->getNameByLang(app()->getLocale()) ?? $post->getNameByLang(app()->getLocale('es')) }}</div>
                        <p class="text-grey-darker text-base" style="">
                            {{--put the extract without tags--}}
                            {{ strip_tags($post->getExtractByLang(app()->getLocale())) ?? strip_tags($post->getExtractByLang(app()->getLocale('es'))) }}
                        </p>
                    </div>
                    <div class="px-6 py-4">
                        @foreach($post->tags as $tag)
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
