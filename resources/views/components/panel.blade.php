@props(['title'])

<section class="border border-gray-300">
    <h2 class="px-4 py-3 border-b border-gray-300 font-semibold">{{ $title }}</h2>
    <div class="overflow-x-auto">
        {{ $slot }}
    </div>
</section>
