@props([
    'id' => 'popup',
    'isVideo' => false,
])


<dialog id="{{ $id }}" {{ $attributes->merge(['class' => 'popup'])->class(['popup--video' => $isVideo]) }}>
    <div class="popup__wrapper">
        <div data-popup-content class="popup__content">
            <button data-popup-close class="popup__close">
                <x-ui.icon size="32" />
            </button>
            @if($isVideo)
                <div data-popup-vk-place class="popup__video" />
            @endif
            {{ $slot }}
        </div>
    </div>
</dialog>