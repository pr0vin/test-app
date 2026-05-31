<aside class="bg-white shadow-lg" style="width: 220px">
    <div class="p-6 border-b">
        <h1 class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'Laravel') }}
        </h1>
    </div>

    <nav class="p-4 space-y-2">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 9V9m0 12h6" />
            </svg>

            <span>Dashboard</span>
        </a>

        <!-- Posts -->
        <a href="{{ route('blogs.index') }}"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>

            <span>Posts</span>
        </a>

        <!-- Users -->
        <a href="{{ route('users.index') }}"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5V4H2v16h5m10 0v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2m12 0H7m8-10a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>

            <span>Users</span>
        </a>

        <!-- Settings -->
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317a1 1 0 011.35-.936l1.274.637a1 1 0 00.894 0l1.274-.637a1 1 0 011.35.936l.146 1.4a1 1 0 00.726.87l1.37.342a1 1 0 01.617 1.617l-.94 1.174a1 1 0 000 1.25l.94 1.174a1 1 0 01-.617 1.617l-1.37.342a1 1 0 00-.726.87l-.146 1.4a1 1 0 01-1.35.936l-1.274-.637a1 1 0 00-.894 0l-1.274.637a1 1 0 01-1.35-.936l-.146-1.4a1 1 0 00-.726-.87l-1.37-.342a1 1 0 01-.617-1.617l.94-1.174a1 1 0 000-1.25l-.94-1.174a1 1 0 01.617-1.617l1.37-.342a1 1 0 00.726-.87l.146-1.4z" />

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <span>Settings</span>
        </a>

        <!-- Reports -->
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17v-6m4 6V7m4 10v-3M5 21h14" />
            </svg>

            <span>Reports</span>
        </a>

    </nav>
</aside>
