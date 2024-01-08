<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 px-6">
        <h1 class="text-3xl font-bold text-center mb-10 text-coffee">編集画面</h1>
        <form action="/cafes/{{ $cafe->id }}/{{$review->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2 class="text-xl font-semibold text-coffee mb-2">Title</h2>
                    <input type='text' name='review[title]' value="{{ $review->title }}"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee"/>
            </div>
            <div class='content__body'>
                <h2 class="text-xl font-semibold text-coffee mb-2">Body</h2>
                    <input type='text' name='review[body]' value="{{ $review->body }}"
                        class="w-full h-40 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee"/>
            </div>
            <div class='content__stars'>
                <h2 class="text-xl font-semibold text-coffee mb-2">Stars</h2>
                    <input type='number' name='review[stars]' value="{{ $review->stars }}"
                        class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-coffee"/>
            </div>
            <!-- Submit Button -->
            <br>
            <input type="submit" value="更新する"
                    class="w-full bg-coffee hover:bg-coffee-dark text-white font-bold py-2 px-4 rounded"/>
            
        </form>
        <div class="footer text-center py-4">
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
