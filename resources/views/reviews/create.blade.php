<x-app-layout>
    <h1>レビュー投稿</h1>
    <form action="/cafes/{{ $cafe->id }}" method="POST">
        @csrf
        <div class="title">
            <h2>Title</h2>
            <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
        </div>
        <div class="body">
            <h2>Body</h2>
            <textarea name="review[body]" placeholder="レビュー内容">{{ old('review.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
        </div>
        <div class="stars">
            <h2>Stars</h2>
            <input type="number" name="review[stars]" placeholder="評価" value="{{ old('review.stars') }}"/>
            <p class="stars__error" style="color:red">{{ $errors->first('review.stars') }}</p>
        </div>
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>