@extends('layouts.front-layout')

@section('content')
    <div>

        <section class="bg-indigo-600 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Build Something Amazing</h2>
                <p class="text-lg mb-6">Modern solutions for your business with speed and style.</p>
                <button class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">
                    Get Started
                </button>
            </div>
        </section>

        <!-- Features -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-bold mb-2">Fast</h3>
                    <p>Optimized for performance and speed.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-bold mb-2">Secure</h3>
                    <p>Top-notch security for your data.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-bold mb-2">Scalable</h3>
                    <p>Grow your app without limits.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="bg-indigo-100 py-16 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to start?</h2>
            <button class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                Join Now
            </button>
        </section>
    </div>
@endsection
