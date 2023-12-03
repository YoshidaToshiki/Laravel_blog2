<x-app-layout>
    <form action="/cafes" method="GET">
            @csrf
    <div class="name">
        <h2>Title</h2>
        <input type="text" name="cafe[name]" placeholder="タイトル" value="{{ old('cafe.title') }}"/>
        <p class="title__error" style="color:red">{{ $errors->first('cafe.title') }}</p>
    </div>
    <div class="menu">
        <h2>Menu</h2>
        <select name="cafe[menu_id]">
            @foreach($menus as $menu)
                 <option value="{{ $menu->id }}">{{ $menu->name }}</option>
            @endforeach
        </select>
    </div>
            <input type="submit" value="保存"/>
    <div class="back">[<a href="/">back</a>]</div>
    </form>
</x-app-layout>