@props([
    'id' => 'name',
    'type' => 'text',
    'name' => 'name',
    'placeholder' => 'Ваше имя',
])

<label for="{{ $id }}" {{ $attributes->merge(['class' => 'form-field']) }}>
    @if($type === 'textarea')
        <textarea class="form-field__input form-field__input--textarea" name="{{ $name }}" id="{{ $id }}"
            type="{{ $type }}" placeholder="{{ $placeholder }}" autocomplete="off"></textarea>
    @else
        <input class="form-field__input" name="{{ $name }}" id="{{ $id }}" type="{{ $type }}"
            placeholder="{{ $placeholder }}" autocomplete="off">
    @endif
    {{ $slot }}
</label>