<x-layout>

    <h2>Currently available ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            {{-- <x-card href="/ninjas/{{ $ninja['id'] }}"> --}}
                <x-card href="/ninjas/{{ $ninja -> id }}">
                {{-- <h3> {{ $ninja['name'] }} </h3> --}}
                <h3> {{ $ninja -> name }} </h3>
             </x-card>
         @endforeach
    </ul>
</x-layout>
