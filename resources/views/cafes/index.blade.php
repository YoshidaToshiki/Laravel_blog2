<x-app-layout>
    <div class='cafes space-y-8 max-w-6xl mx-auto p-4'>
        @foreach ($cafes as $cafe)
            <div class='cafe bg-white rounded-lg shadow-lg p-6 mb-4'>
                <div class='flex flex-col md:flex-row'>
                    <!--<img class='w-full md:w-48 h-48 object-cover rounded-lg mb-4' src="{{ $cafe->image }}" alt="{{ $cafe->name }}">-->
                    <div class='md:ml-6'>
                        <h2 class='name text-2xl font-semibold mt-2 md:mt-0 mb-2'>
                          <a href="/cafes/{{ $cafe->id }}" class="text-coffee hover:text-coffee-dark">{{ $cafe->name }}</a>
                        </h2>
                        <h2 class='area text-sm text-gray-600 mb-2'>
                          <a href="/areas/{{ $cafe->area_id }}">{{ $cafe->area->area_name }}</a>
                        </h2>
                        <p class='address text-gray-800 mt-2 mb-1'>{{ $cafe->address }}</p>
                        <p class='access text-gray-800 mb-1'>{{ $cafe->access }}</p>
                        <p class='breadth text-gray-800 mb-1'>広さ: {{ $cafe->breadth }}m²</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class='paginate my-8 text-center'>
        {{ $cafes->links() }}
    </div>
    <script>
        'use strict'
        function deletePost(e, id) {
            e.preventDefault();
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>