@extends('layouts.main')
@section('container')
  <h2 class="mb-4">Halaman Blog Posts</h2>
  @foreach ($posts as $post)
  <article class="mb-5 border-bottom pb-3">
    <h3><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>

    <p>By <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More..</a>
  </article>
  @endforeach
@endsection