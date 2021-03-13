<x-app-layout>
    <div class="container px-12 py-12 pt-24">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{ asset($post->image->url) }}">
                </figure>
                <div class="text-base text-gray-600 mt-4">
                    {{ $post->body }}
                </div>
            </div>
            <aside>
                <h1 class="text-2xl text-gray-600 font-bold text-left mb-4"> Related Posts in
                    | {{ $post->category->name }}</h1>
                    <ul>
                        @foreach ($related as $rpost)
                            <li class="mb-4">
                                <a class="flex" href="{{ route('post.show', $rpost) }}">
                                    <img class="w-36 h-20 object-cover object-center"
                                         src="{{ asset($rpost->image->url) }}">
                                    <span class="ml-2 text-gray-600">
                                      {{ $rpost->name }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
