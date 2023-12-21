<x-app-layout>
    <h1 class="name">
        {{ $area->name }}
    </h1>
    <div class="cafes">
        @foreach($cafes as $cafe)
            <div class='cafe'>
                <p class='name'>{{ $cafe->name }}</p>
            </div>
        @endforeach
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>