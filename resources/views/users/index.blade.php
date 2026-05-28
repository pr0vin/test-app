<x-app-layout>
    <h2 class="text-2xl font-bold">user List</h2>


    <div class="mb-4 flex justify-end">
        <a href="{{ route('users.create') }}" class="p-2 bg-blue-600 rounded text-white">+ Add New</a>
    </div>
    <table border="1" class="border">
        <thead>
            <tr>
                <th>SN</th>
                <th></th>
                <th>Name</th>
                <th>email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp

            @foreach ($users as $user)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td><img src="{{ asset('storage/' . $user->image) }}" alt="" width="100"></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email ?? '' }}</td>
                    <td>
                        <div class="flex gap-2 ">
                            {{-- <a href="{{ route('users.manage', $user->id) }}"
                                class="p-2 bg-grey-600 rounded text-green-200">Profile
                            </a> --}}

                            <a href="{{ route('users.show', $user->id) }}"
                                class="p-2 bg-blue-600 rounded text-white">view</a>

                            {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="p-2 bg-red-600 rounded text-white">Delete</button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

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
