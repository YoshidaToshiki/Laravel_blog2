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
    <div class="review">
        @foreach($reviews as $review)
            <div class='review'>
                <p class='title'>{{ $review->title }}</p>
            </div>
        @endforeach
    </div>
    <div>
        <a href='/cafes/{{$cafe->id}}/reviews/create'>レビュー投稿へ</a>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>
