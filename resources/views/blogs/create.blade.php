<x-guest-layout>
    <h2 class="text-2xl font-bold">Blog New</h2>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Title
            </label>
            <input type="text" name="title" placeholder="Enter title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <x-category-select />

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Image
            </label>
            <input type="file" name="image" placeholder="Enter title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Submit
        </button>
    </form>

</x-guest-layout>
