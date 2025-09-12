@props([
    'isSingle' => false,
    'isCloseOutside' => false,
    'duration' => '300'
])

<div data-accordion-root @if($isSingle) data-accordion-single @endif @if($isCloseOutside) data-accordion-close
    @endif data-accordion-duration="{{ $duration }}">
    {{ $slot }}
</div>
