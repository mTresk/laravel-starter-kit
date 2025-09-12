@php
    $breadcrumbItems = [
        [
            'href' => '/',
            'title' => 'Главная',
        ],
        [
            'href' => null,
            'title' => 'Контакты',
        ],
    ];
@endphp

<x-layout.main title="Контакты" description="Описание страницы контактов">
    <section class="contacts">
        <div class="contacts__container">
            <x-layout.breadcrumb isDark :items="$breadcrumbItems" />
        </div>
    </section>
</x-layout.main>
