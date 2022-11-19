@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments" class="rounded-xl space-x-4">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->user()->id }}" alt="" width="40" height="40"
                    class="rounded-full">
                <h2 class="ml-3">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring rounded-xl"
                    placeholder="Quick, think of something to say!" rows="5" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline font-semibold">Register</a> or <a href="/login"
            class="hover:underline font-semibold">Log in to leave a comments</a>
    </p>
@endauth
