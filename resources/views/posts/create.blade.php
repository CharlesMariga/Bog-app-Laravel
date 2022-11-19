<x-layout>
    <section class="max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish new post
        </h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full"
                        value="{{ old('title') }}" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Slug</label>
                    <input type="text" name="slug" id="slug" class="border border-gray-400 p-2 w-full"
                        value="{{ old('slug') }}" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Thumbnail</label>
                    <input type="file" class="border border-gray-400 p-2 w-full" name="thumbnail" id="thumbnail"
                        accept="image/*">
                    required>
                    @error('thumbnail')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full" required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>
                    <textarea name="body" id="body" class="border border-gray-400 p-2 w-full" required>{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="border border-gray-400 p-2 w-full" required>
                        <option value="">Select One...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit>Publish</x-submit>
            </form>
        </x-panel>
    </section>
</x-layout>
