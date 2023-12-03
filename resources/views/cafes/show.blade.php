<x-app-layout>
    <h1 class="name">
        {{ $cafe->name }}
    </h1>
    <div class="menus">
        @foreach($menus as $menu)
            <div class='menu'>
                <p class='name'>{{ $menu->name }}</p>
                <p class='body'>{{ $menu->body }}</p>
            </div>
        @endforeach
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>
