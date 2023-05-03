<x-layouts.main>
    <div class="container">
        <h1>Cities</h1>
        @foreach($cities as $city)
            @if(!empty($selected))
                @if($selected === $city->name)
                    <p>
                        <b><a href="/cities/{{ $city->name }}" style="text-decoration: none;border: 1px solid green;padding: .5em">{{ $city->name }}</a></b>
                    </p>
                @else
                    <p>
                        <a href="/cities/{{ $city->name }}">{{ $city->name }}</a>
                    </p>
                @endif
            @else
                <p>
                    <a href="/cities/{{ $city->name }}">{{ $city->name }}</a>
                </p>
            @endif
        @endforeach
    </div>
</x-layouts.main>
