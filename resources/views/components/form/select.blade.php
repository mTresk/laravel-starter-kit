@props([
    'name' => 'select',
    'id' => 'select',
    'placeholder' => null,
    'options' => [],
])

<label
    for="{{ $id }}" {{ $attributes->merge(['class' => 'form-field form-field--select'])->whereDoesntStartWith('data-') }}>
    <select data-select id="{{ $id }}" name="{{ $name }}" {{ $attributes->whereStartsWith('data-') }}
    @if($placeholder) data-placeholder="{{ $placeholder }}" @endif>
        @foreach($options as  $option)
            <option value="{{ $option['value'] }}" @if(@isset($option['selected'])) selected @endif>
                {{ $option['label']  }}
            </option>
        @endforeach
    </select>
</label>