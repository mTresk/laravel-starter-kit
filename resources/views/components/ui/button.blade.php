@props([
    'href' => null,
    'type' => 'button'
])

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'button']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'button']) }}>
        {{ $slot }}
    </button>
@endif