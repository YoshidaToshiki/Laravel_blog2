<x-app-layout>
    <h1>Blog Name</h1>
    
    <div class='cafes'>
        @foreach ($cafes as $cafe)
            <div class='cafe'>
                <h2 class='name'>
                  <a href="/cafes/{{ $cafe->id }}">{{ $cafe->name }}</a>
                </h2>
                <h2 class='area'>
                  <a href="/areas/{{ $cafe->area_id }}">{{ $cafe->area->area_name }}</a>
                </h2>
                <p class='address'>{{ $cafe->address }}</p>
                <p class='access'>{{ $cafe->access }}</p>
                <p class='image'>{{ $cafe->image }}</p>
                <p class='breadth'>{{ $cafe->breadth }}</p>
                <p class='management_flg'>{{ $cafe ->management_flg }}</p>
                <p class='create_at'>{{ $cafe->create_at }}</p>
                <p class='updated_at'>{{ $cafe->updated_at }}</p>
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