@props(['route', 'icon', 'title' => null])

<div>
    <a href="{{ $route }}"
        class="bg-transparent hover:bg-opacity-10 hover:bg-gray-200 rounded-full p-2 inline-block">
        <div class="flex items-center space-x-4">
            <x-dynamic-component :component="'icons.' . $icon" />

            @if ($title)
                <div class="font-bold text-lg pr-8">{{ $title }}</div>
            @endif
        </div>
    </a>
</div>
