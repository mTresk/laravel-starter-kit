@props([
    'items' => [],
    'isDark' => false,
])

<ul class="breadcrumb @if ($isDark) breadcrumb--dark @endif">
    @foreach ($items as $index => $item)
        <li>
            @if ($item['href'])
                <a href="{{ $item['href'] }}">

                    {{ $item['title'] }}
                </a>
            @else
                <span>
          {{ $item['title'] }}
        </span>
            @endif
        </li>
    @endforeach
</ul>
