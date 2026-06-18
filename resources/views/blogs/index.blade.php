<x-app-layout>


    <div class="mb-4 flex justify-between">
        <h2 class="text-2xl font-bold">Blog List</h2>
        <a href="{{ route('blogs.create') }}" class="p-2 bg-blue-600 rounded text-white">+ Add New</a>
    </div>


    <div class="mt-3 bg-white p-3">
        {{-- filter --}}

        <div>
            <form action="{{ route('blogs.index') }}" method="get">

                <div class="grid grid-cols-4 gap-3">

                    <div>
                        <input type="text" class="block border-gray-300 rounded" name="title"
                            value="{{ request()->title ?? '' }}" placeholder="title">
                    </div>

                    <div>
                        <x-category-select :label="true" :selected="request()->blog_category_id ?? ''" />
                    </div>

                    <div>
                        <button type="submit" class="p-2 bg-blue-600 rounded text-white">Search</button>
                    </div>

                </div>

            </form>

        </div>
        <table border="1" class="border mt-3">
            <thead>
                <tr>
                    <th>SN</th>
                    <th></th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                @endphp

                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ ($blogs->currentPage() - 1) * $blogs->perPage() + $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $blog->image) }}" alt="" width="100"></td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->blogCategory->name ?? '' }}</td>
                        <td>{{ $blog->tags->pluck('name')->implode(', ') }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                            <div class="flex gap-2 ">
                                <a href="{{ route('blogs.edit', $blog->id) }}"
                                    class="p-2 bg-blue-600 rounded text-white">Edit</a>

                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="p-2 bg-red-600 rounded text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div>
            {{ $blogs->links() }}
        </div>
    </div>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #fafafa;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>

</x-app-layout>
