<x-layouts.main>
    <div class="container">
        <h1>Cities</h1>
        @foreach($cities as $city)
            <p>
                <a href="/cities/{{ $city->name }}">{{ $city->name }}</a>
            </p>
        @endforeach
    </div>
</x-layouts.main>
