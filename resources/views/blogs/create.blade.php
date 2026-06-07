<x-app-layout>
    <h2 class="text-2xl font-bold">Blog {{ isset($blog->id) ? 'Edit' : 'New' }}</h2>

    <form action="{{ isset($blog->id) ? route('blogs.update', $blog->id) : route('blogs.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @if (isset($blog->id))
            @method('PUT')
        @endif

        <!-- Title -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Title
            </label>
            <input type="text" name="title" value="{{ old('title', $blog?->title) }}" placeholder="Enter title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Category -->
        <x-category-select :selected="old('category_id', $blog?->blog_category_id)" />

        <!-- Tags -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Tags
            </label>

            <select name="tags[]" multiple
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ in_array($tag->id, old('tags', $blog?->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>

            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Image
            </label>

            <input type="file" name="image"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            <small class="text-gray-500">
                You will need to select the image again if validation fails.
            </small>

            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Description
            </label>

            <textarea rows="4" name="description" placeholder="Enter description"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $blog?->description) }}</textarea>

            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            {{ isset($blog->id) ? 'Update' : 'Create' }}
        </button>
    </form>
</x-app-layout>
