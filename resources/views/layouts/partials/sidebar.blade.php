  <aside class=" bg-white shadow-lg" style="width: 200px">
      <div class="p-6 border-b">
          <h1 class="text-2xl font-bold text-gray-800">
              {{ config('app.name', 'Laravel') }}
          </h1>
      </div>

      <nav class="p-4 space-y-2">
          <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">
              Dashboard
          </a>

          <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">
              Users
          </a>

          <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">
              Settings
          </a>

          <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-200 text-gray-700">
              Reports
          </a>
      </nav>
  </aside>
