<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 px-6">
        <h1 class="text-3xl font-bold text-center mb-10 text-coffee">レビュー投稿</h1>
        <form action="/cafes/{{$cafe->id}}" method="POST" class="space-y-6">
            @csrf
            <!-- Title Section -->
            <div class="title">
                <h2 class="text-xl font-semibold text-coffee mb-2">Title</h2>
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee"/>
                <p class="title__error text-red-500">{{ $errors->first('review.title') }}</p>
            </div>
            <!-- Body Section -->
            <div class="body">
                <h2 class="text-xl font-semibold text-coffee mb-2">Body</h2>
                <textarea name="review[body]" placeholder="レビュー内容"
                          class="w-full h-40 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee">{{ old('review.body') }}</textarea>
                <p class="body__error text-red-500">{{ $errors->first('review.body') }}</p>
            </div>
            <!-- Stars Section -->
            <div class="stars">
                <h2 class="text-xl font-semibold text-coffee mb-2">Stars</h2>
                <input type="number" name="review[stars]" placeholder="評価" value="{{ old('review.stars') }}"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee"/>
                <p class="stars__error text-red-500">{{ $errors->first('review.stars') }}</p>
            </div>
            <!-- Submit Button -->
            <input type="submit" value="投稿する"
                   class="w-full bg-coffee hover:bg-coffee-dark text-white font-bold py-2 px-4 rounded"/>
        </form>
        
        <!-- Footer/Back Link -->
        <div class="footer text-center py-4 mt-6">
            <a href="/" class="text-coffee hover:underline">戻る</a>
        </div>
    </div>
</x-app-layout>

<style>
  .text-coffee {
      color: #6f4e37;
  }
  .bg-coffee {
      background-color: #6f4e37;
  }
  .bg-coffee-dark:hover {
      background-color: #5a392b;
  }
</style>
