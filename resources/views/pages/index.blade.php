@extends('layouts.base')

@section('content')
    
 @foreach ($categories as $category)
    
    <div class="category">
      
      <h1>{{ $category->name }}</h1>
      <p>{{ $category->body }}</p>
      @auth
        <span>
          <a href="{{route('category.delete' , $category-> id)}}">DELETE</a>
          <span class="hide"></span>
          <a href="{{route ('category.edit' , $category -> id) }}">EDIT</a>
          <span class="hide"></span>
          <a href="{{route ('post.create', $category -> id) }}">POST</a>
        </span>
      @endauth
      <div class="posts">
        @foreach ($category->posts as $post)
          <div class="post">
            @auth
              <a href="{{ route('post.show' , $post -> id)}}">
                <h3>{{ $post->title }}</h3>
              </a>
              @else
                <h3>{{ $post->title }}</h3>
            @endauth
          </div>
        @endforeach
      </div>
    </div>

  @endforeach

@endsection