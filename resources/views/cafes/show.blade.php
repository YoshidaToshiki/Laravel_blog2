<x-app-layout>
    <!-- Cafe Name -->
    <h1 class="text-4xl font-bold text-center my-8 text-coffee">
        {{ $cafe->name }}
    </h1>

    <!-- Menus Section -->
    <div class="menus max-w-4xl mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4 text-coffee">Menus</h2>
        @foreach($menus as $menu)
            <div class='menu bg-white rounded-lg shadow-md p-4 mb-4'>
                <p class='name text-xl font-semibold'>{{ $menu->name }}</p>
                <p class='body text-gray-700 mt-2'>{{ $menu->body }}</p>
            </div>
        @endforeach
    </div>

    <!-- Reviews Section -->
    <div class="review max-w-4xl mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4 text-coffee">Reviews</h2>
        @foreach($reviews as $review)
            <div class='review bg-white rounded-lg shadow-md p-4 mb-4'>
                <p class='title font-medium text-lg'>{{ $review->title }}</p>
                <p class='title font-medium text-lg'>★{{ $review->stars }}</p>
            </div>
        @endforeach
    </div>

    <!-- Review Link -->
    <div class="text-center my-6">
        <a href='/cafes/{{$cafe->id}}/reviews/create' class="text-white bg-coffee hover:bg-coffee-dark font-semibold py-2 px-4 rounded">
            レビュー投稿へ
        </a>
    </div>

    <!-- Footer/Back Link -->
    <div class="footer text-center py-4">
        <a href="/" class="text-coffee hover:underline">戻る</a>
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
