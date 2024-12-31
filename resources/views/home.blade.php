<x-layout>
    <x-slot:heading>
        Home page
    </x-slot:heading>
    <h1>From the Edge of the Jellobelt</h1>
    <ul>
        @foreach ($posts as $post)
            <a href="/post/{{ $post['id'] }}">
                <li><strong>{{ $post['title'] }}</strong> by {{ $post['author'] }}</li>
            </a>
        @endforeach
    </ul>

</x-layout>
