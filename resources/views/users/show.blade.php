<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4">

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

            <!-- Cover Section -->
            <div class="h-40 bg-gradient-to-r from-blue-500 to-indigo-600"></div>

            <!-- User Info -->
            <div class="px-6 pb-8">

                <div class="flex flex-col md:flex-row md:items-end md:justify-between -mt-16">

                    <!-- Left -->
                    <div class="flex flex-col md:flex-row md:items-center gap-5">

                        <!-- Profile Image -->
                        <div class="w-32 h-32 rounded-full border-4 border-white shadow-md overflow-hidden bg-gray-100">
                            @if ($user->details?->image)
                                <img src="{{ asset('storage/' . $user->details->image) }}" alt="{{ $user->name }}"
                                    class="w-full h-full object-cover">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0D8ABC&color=fff&size=256"
                                    alt="{{ $user->name }}" class="w-full h-full object-cover">
                            @endif
                        </div>

                        <!-- Name & Email -->
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-3xl font-bold text-gray-800">
                                {{ $user->name }}
                            </h2>

                            <p class="text-gray-500 mt-1">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>

                    <!-- Edit Button -->
                    <div class="mt-5 md:mt-0">
                        <a href="{{ route('users.manage', $user) }}"
                            class="inline-flex items-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow transition">
                            Edit Profile
                        </a>
                    </div>
                </div>

                <!-- Details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">

                    <!-- Phone -->
                    <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Phone Number</p>

                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $user->details?->phone ?? 'N/A' }}
                        </h3>
                    </div>

                    <!-- Gender -->
                    <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Gender</p>

                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $user->details?->gender ?? 'N/A' }}
                        </h3>
                    </div>

                    <!-- DOB -->
                    <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Date of Birth</p>

                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $user->details?->dob ? \Carbon\Carbon::parse($user->details->dob)->format('F d, Y') : 'N/A' }}
                        </h3>
                    </div>

                    <!-- Address -->
                    <div class="bg-gray-50 rounded-xl p-5 shadow-sm">
                        <p class="text-sm text-gray-500 mb-1">Address</p>

                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $user->details?->address ?? 'N/A' }}
                        </h3>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-app-layout>
