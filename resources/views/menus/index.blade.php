<x-app-layout>
    <h1>Blog Name</h1>
    <div class='cafes'>
        @foreach ($cafes as $menu)
            <div class='menu'>
                <h2 class='id'>{{ $menu->id }}</h2>
                  <a href="/menus/{{ $menu->id }}">{{ $menu->name }}</a>
                  <a href="">{{ $menu->menus }}</a>
                <p class='cafe_id'>{{ $menu->cafe_id }}</p>
                <p class='body'>{{ $menu->body }}</p>
                <p class='image'>{{ $menu->image }}</p>
                <p class='recommends'>{{ $menu->recommends }}</p>
                <p class='limited_flg'>{{ $menu->limited_flg }}</p>
                <p class='limited_time'>{{ $menu->limited_time }}</p>
                <p class='take_out_flg'>{{ $menu ->take_out_flg }}</p>
                <p class='create_at'>{{ $menu->create_at }}</p>
                <p class='updated_at'>{{ $menu->updated_at }}</p>
                </h2>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $cafes->links() }}
    </div>
    <script>
        'use strict'
        function deletePost(id) {
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>