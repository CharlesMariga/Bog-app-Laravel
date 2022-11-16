@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/100?u={{ $comment->id }}" alt="" width="60" height="60"
                class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs">
                    Posted <time>{{ $comment->created_at }}</time>
                </p>
            </header>
            <p>{{ $comment->body }}</p>
        </div>
    </article>
</x-panel>
