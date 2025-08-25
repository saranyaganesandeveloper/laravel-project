<x-layout>

    <h2>Currently available ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
            {{-- <x-card href="/ninjas/{{ $ninja['id'] }}"> --}}
            {{-- <x-card href="/ninjas/{{ $ninja -> id }}"> --}}
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 70">
                    <div>
                        {{-- <h3> {{ $ninja['name'] }} </h3> --}}
                        <h3> {{ $ninja->name }} </h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{ $ninjas->links() }}
</x-layout>
