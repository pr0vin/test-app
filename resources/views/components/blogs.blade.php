<div>
    <!-- We must ship. - Taylor Otwell -->
    <h1 class="text-2xl font-bold mb-3">{{ $message }}</h1>

    @foreach ($blogs as $blog)
        <div>
            <a href="#">{{ $blog->title }}</a>
        </div>
    @endforeach
</div>
