{{-- <x-layout:title="$title">
    <article class="py-8 max-w-3xl border-bborder-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 January 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/postş" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts.
        </a>
    </article>
    </x-layout>  --}}


    <x-Layout :title="$title">
    
    
        <article class="py-8 max-w-3xl">
        
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            
            <div class="text-base text-gray-500">
                <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> |
                2 January 2025
            </div>
    
            <p class="my-4 font-light">{{ $post['body'], 100 }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts.</a>
        </article>
    </x-Layout>