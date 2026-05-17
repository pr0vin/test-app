<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <span class="text-xl font-bold text-indigo-600">MyApp</span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600">Home</a>
                <a href="{{ route('abouts', ['name' => 'About Us']) }}"
                    class="text-gray-700 hover:text-indigo-600">About</a>
                <a href="{{ route('services', 2) }}" class="text-gray-700 hover:text-indigo-600">Services</a>
                <a href="/contact" class="text-gray-700 hover:text-indigo-600">Contact</a>
                <a href="/blogs" class="text-gray-700 hover:text-indigo-600">Blogs</a>
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Login
                </button>
            </div>

            <!-- Mobile Button -->
            <div class="flex items-center md:hidden">
                <button id="menu-btn" class="text-gray-700 focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
        <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600">About</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600">Services</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-indigo-600">Contact</a>
        <button class="w-full mt-2 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
            Login
        </button>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
