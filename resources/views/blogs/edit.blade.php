@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold">Blog New</h2>


    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Title -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Title
            </label>
            <input type="text" name="title" value="{{ $blog->title ?? '' }}" placeholder="Enter title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>



        @if ($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" width="100" alt="Blog Image" class="mb-4">
        @endif

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Image
            </label>
            <input type="file" name="image" placeholder="Enter title"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">
                Description
            </label>
            <textarea rows="4" name="description" placeholder="Enter description"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"> {{ $blog->description ?? '' }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Update
        </button>
    </form>
@endsection
