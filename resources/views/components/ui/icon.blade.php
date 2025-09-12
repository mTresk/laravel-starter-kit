@props([
    'name' => 'close',
    'width' => '24',
    'height' => '24',
    'size' => null,
])

@php
    $iconWidth = $size ?? $width;
    $iconHeight = $size ?? $height;
@endphp

<svg width="{{ $iconWidth }}" height="{{ $iconHeight }}">
    <use href="/images/icons.svg#{{ $name }}"></use>
</svg>
