@extends('layouts.main')

@section('container')
  <article>
    <h2 class="mb-3">{{ $post->title }}</h2>
    <p>By <a href="/posts/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {{-- dapat mengeksekusi html special char seperti tag p --}}
    {!! $post->body !!}
  </article>
  <a href="/posts">Back to Post</a>
@endsection