@extends('layouts.app')

@section('title', 'About')
@section('content')
    <div>
        <!-- Hero Section -->
        <section class="bg-indigo-600 text-white py-20 text-center">
            <h2 class="text-4xl md:text-5xl font-bold">{{ $name }}</h2>
            <p class="mt-4 text-lg">Learn more about who we are and what we do.</p>
        </section>

        <!-- About Content -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h3 class="text-3xl font-bold mb-4">Our Story</h3>
                    <p class="mb-4 text-gray-600">
                        We started with a simple mission: to build modern, scalable, and user-friendly web applications.
                        Over the years, we have helped businesses grow using technology.
                    </p>
                    <p class="text-gray-600">
                        Our team focuses on clean design, strong performance, and real-world solutions that deliver value.
                    </p>
                </div>
                <div>
                    <img src="https://via.placeholder.com/500" class="rounded-xl shadow" alt="About image">
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h3 class="text-3xl font-bold mb-10">Our Team</h3>
                <div class="grid md:grid-cols-3 gap-8">

                    @foreach ($users as $user)
                        <div class="bg-gray-50 p-6 rounded-xl shadow">
                            <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4">
                            <h4 class="font-semibold">{{ $user->name }}</h4>
                            <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        </div>
                    @endforeach

                    <div class="bg-gray-50 p-6 rounded-xl shadow">
                        <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4">
                        <h4 class="font-semibold">John Doe</h4>
                        <p class="text-sm text-gray-500">CEO</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-xl shadow">
                        <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4">
                        <h4 class="font-semibold">Jane Smith</h4>
                        <p class="text-sm text-gray-500">Developer</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-xl shadow">
                        <img src="https://via.placeholder.com/100" class="mx-auto rounded-full mb-4">
                        <h4 class="font-semibold">Alex Brown</h4>
                        <p class="text-sm text-gray-500">Designer</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="bg-indigo-100 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Want to work with us?</h2>
            <button class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                Contact Us
            </button>
        </section>
    </div>
@endsection
