<x-app-layout>
    <div class="max-w-4xl p-6">
        <h2 class="text-2xl font-bold mb-6">Application Settings</h2>

        @if (session('success'))
            <div class="mb-6 rounded-lg bg-green-100 border border-green-400 text-green-700 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Site Name
                </label>
                <input type="text" name="site_name"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('site_name', settings('site_name')) }}">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Site Email
                </label>
                <input type="email" name="site_email"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('site_email', settings('site_email')) }}">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Phone
                </label>
                <input type="text" name="site_phone"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('site_phone', settings('site_phone')) }}">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Address
                </label>
                <textarea name="site_address" rows="4"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('site_address', settings('site_address')) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Facebook URL
                </label>
                <input type="url" name="facebook_url"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    value="{{ old('facebook_url', settings('facebook_url')) }}">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Logo
                </label>
                <input type="file" name="logo"
                    class="block w-full text-sm text-gray-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-md file:border-0
                    file:text-sm file:font-semibold
                    file:bg-indigo-50 file:text-indigo-700
                    hover:file:bg-indigo-100">
            </div>

            @if (isset($logo))
                <div>
                    <img src="{{ asset('storage/' . $logo) }}" alt="Logo" class="h-24 w-auto rounded border">
                </div>
            @endif

            <div>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
