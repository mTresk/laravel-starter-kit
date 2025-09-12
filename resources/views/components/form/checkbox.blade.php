@props([
    'id' => 'checkbox',
    'checked' => false,
    'value' => 'checkbox',
    'name' => 'checkbox'
])

<label {{ $attributes->merge(['class' => 'checkbox'])->whereDoesntStartWith('data-') }} for="{{ $id }}">
    <input {{ $attributes->whereStartsWith('data-') }} id="{{ $id }}" name="{{ $name }}" class="checkbox__input"
        type="checkbox" value="{{ $value }}" @if($checked)checked @endif>
    <span class="checkbox__text">{{ $slot }}</span>
</label>