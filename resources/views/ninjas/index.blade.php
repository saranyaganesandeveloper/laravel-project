<x-layout>

    <h2>Currently available ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            <a href="/ninjas/{{ $ninja['id'] }} ">
                <li>{{ $ninja['name'] }}</li>
            </a>
        @endforeach
    </ul>
</x-layout>
