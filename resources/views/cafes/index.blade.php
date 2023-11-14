<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Memories of cafe trip</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='cafes'>
            @foreach ($cafes as $cafe)
                <div class='cafe'>
                    <h2 class='id'>{{ $cafe->id }}</h2>
                    <p class='area_id'>{{ $cafe->area_id }}</p>
                    <p class='name'>{{ $cafe->name }}</p>
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
        function deletePost(id) {
        'use strict'
        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
        <x-app-layout>
           <x-slot name="header">
        　（index)
           </x-slot>
           Blog Name<br>
           id<br>
           area_id<br>
           name<br>
           address<br>
           access<br>
           image<br>
           breadth<br>
           management_flg<br>
           crete_at<br>
           management_flg<br>
           <br>
           ログインユーザー：{{ Auth::user()->name }}
        </x-app-layout>
    </body>
</html>