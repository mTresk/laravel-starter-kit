@props([
    'min' => 1,
    'max' => 100,
])

<div data-range {{ $attributes->merge(['class' => 'range']) }}>
    <div class="range__fields">
        <label class="range__field">
            <input autocomplete="off" data-range-min type="number" name="min">
        </label>
        <label class="range__field">
            <input autocomplete="off" data-range-max type="number" name="max">
        </label>
    </div>
    <div data-range-slider data-range-slider-min="{{ $min }}" data-range-slider-max="{{ $max }}"
        class="range__slider" />
</div>