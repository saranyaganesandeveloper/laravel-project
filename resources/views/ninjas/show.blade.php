<x-layout>
    {{-- <h2>Ninja Id - {{$id}}</h2> --}}

    <h2>{{ $ninja->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill Level: {{ $ninja->skill }}</strong></p>
        <p><strong>About me : </strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

</x-layout>
