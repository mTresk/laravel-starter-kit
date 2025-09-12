@props([
    'checked' => false,
    'value' => 'option',
    'name' => 'option'
])

<label {{ $attributes->merge(['class' => 'option'])->whereDoesntStartWith('data-') }}>
    <input {{ $attributes->whereStartsWith('data-') }} name="{{ $name }}" class="option__input" type="radio"
        value="{{ $value }}" @if($checked) checked @endif>
    <span class="option__text">{{ $slot }}</span>
</label>