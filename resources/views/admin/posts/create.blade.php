<x-layout>
    <x-setting heading="Publish new post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id" class="border border-gray-200 rounded p-2 w-full" required>
                    <option value="">Select One...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
