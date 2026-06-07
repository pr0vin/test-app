<x-app-layout>
    <div class="container">
        <h2 class="mb-4">Application Settings</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Site Name</label>
                <input type="text" name="site_name" class="form-control"
                    value="{{ old('site_name', settings('site_name')) }}">
            </div>

            <div class="mb-3">
                <label>Site Email</label>
                <input type="email" name="site_email" class="form-control"
                    value="{{ old('site_email', settings('site_email')) }}">
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="site_phone" class="form-control" value="">
            </div>

            <div class="mb-3">
                <label>Address</label>
                <textarea name="site_address" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Facebook URL</label>
                <input type="url" name="facebook_url" class="form-control" value="">
            </div>

            <div class="mb-3">
                <label>Logo</label>
                <input type="file" name="logo" class="form-control">
            </div>

            @if (isset($logo))
                <img src="{{ asset('storage/' . $logo) }}" width="120" class="mb-3">
            @endif

            <button class="btn btn-primary">
                Save Settings
            </button>
        </form>
    </div>
</x-app-layout>
