@extends('layout.base')

@section('content')

  <div class="category">
    <div class="posts">
        <div class="post ext">
          <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('POST')
            <label for="name">NAME:</label>
            <input type="text" name="name" value="{{$category -> name}}"><br><br>
            <label for="body">BODY:</label>
            <input type="text" name="body" value="{{$category -> body}}"><br><br>
            <input type="submit" name="submit" value="POST">
          </form>
        </div>
    </div>
  </div>

@endsection