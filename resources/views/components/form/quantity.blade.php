@props([
    'name' => 'quantity',
])

<div data-quantity {{ $attributes->merge(['class' => 'quantity']) }}>
    <button data-quantity-minus type="button" class="quantity__button quantity__button--minus"></button>
    <div class="quantity__input">
        <input data-quantity-value autocomplete="off" type="text" name="{{ $name }}" value="1">
    </div>
    <button data-quantity-plus type="button" class="quantity__button quantity__button--plus"></button>
</div>
