@props([
    'color' => $color ?? 'green',
])

<button class="p-2 bg-{{ $color }}-600 text-white rounded">
    {{ $slot }}
</button>
