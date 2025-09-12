@props([
    'header',
    'content',
])

<details data-accordion>
    <summary>
        {{ $header }}
        <slot name="header" />
    </summary>
    <div data-accordion-content>
        {{ $content }}
    </div>
</details>