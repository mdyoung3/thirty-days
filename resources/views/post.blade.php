<x-layout>
    <x-slot:heading>
        Post page
    </x-slot:heading>

    <h2 class="text-2xl font-semibold text-gray-800 tracking-wide">{{ $post['title'] }}</h2>
    <p>Byline: {{ $post['author'] }}</p>
    <p>{{ $post['category'] }}</p>
</x-layout>
